<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Fee;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log; 
class PaymentController extends Controller
{
    /**
     * Create Razorpay order for a student
     */
    public function createOrder(Request $request)
    {
        try {
            $student = Student::where('email', Auth::user()->email)->firstOrFail();

            // Get or create fee record
            $fee = Fee::where('student_id', $student->id)
                ->where('status', 0) // unpaid record
                ->latest()
                ->first();
            $submittedFee = Fee::where('student_id', $student->id)
                ->where('status', 1) // unpaid record
                ->latest()
                ->first();
            if ($submittedFee) {
                return view('payment.paid', [
                    'fee' => $submittedFee,
                    'student' => $student,
                ]);
            }
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            // Create order in Razorpay
            $order = $api->order->create([
                'receipt' => $fee->receipt,
                'amount' => $fee->amount * 100, // Razorpay uses paise
                'currency' => $fee->currency,
            ]);
            // Update fee record with Razorpay order ID
            $fee->update(['razorpay_order_id' => $order['id']]);
            $studentName = $student->first_name . ' ' . $student->last_name;

            return view('payment.checkout', [
                'order_id' => $order['id'],
                'amount' => $order['amount'],
                'currency' => $order['currency'],
                'key' => env('RAZORPAY_KEY'),
                'student' => $studentName,
                'class' => $student->class,
            ]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Verify Razorpay payment
     */
    public function verifyPayment(Request $request)
    {
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            // ✅ Verify signature
            $api->utility->verifyPaymentSignature($attributes);

            // ✅ Find matching Fee record
            $fee = Fee::where('razorpay_order_id', $request->razorpay_order_id)->first();
            if (!$fee) {
                throw new Exception('Fee record not found for this order.');
            }

            // ✅ Update payment status
            $fee->update([
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature,
                'status' => 1, // Paid
            ]);

            // ✅ Get student record (adjust relation/logic as per your DB)
            $student = $fee->student ?? Student::find($fee->student_id);

            // ✅ Generate PDF using your invoice.blade.php
            $pdf = PDF::loadView('payment.invoice', [
                'fee' => $fee,
                'student' => $student,
                'school_logo' => asset('images/school-logo.png'),
                'school_phone' => '6386369558',
                'school_email' => 'info@svnic.edu',
            ])->setPaper('A4');

            // ✅ Stream the PDF so browser downloads it instantly
            $filename = 'Invoice_' . $fee->id . '_' . time() . '.pdf';
            return $pdf->download($filename);
        } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
            return response()->json(['success' => false, 'message' => 'Signature verification failed.']);
            Log::error('Signature verification failed: ' . $e->getMessage());
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }


    /**
     * Determine fee amount by student class
     */
    private function getFeeAmount($class)
    {
        return match ((int) $class) {
            1 => 300,
            2 => 350,
            3 => 400,
            4 => 450,
            5 => 500,
            6 => 550,
            7 => 600,
            8 => 650,
            9 => 700,
            10 => 750,
            11 => 800,
            12 => 850,
            default => 1000,
        };
    }
}
