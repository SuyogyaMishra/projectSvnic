<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Success - Swami Vivekanand Inter College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f9fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            max-width: 500px; 
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .success-icon {
            font-size: 70px;
            color: #28a745;
        }
        .header {
            font-weight: 700;
            color: #333;
        }
        .college-name {
            font-weight: 700;
            color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="card p-4 text-center">
        <h4 style="color:red">*Fake Recipt*</h4>
        <div class="success-icon mb-3">✅</div>
        <h4 class="header mb-1">Payment Successful!</h4>
        <p class="text-muted mb-3">Your payment has been verified and recorded successfully.</p>

        <div class="border rounded p-3 text-start bg-light">
            <h6 class="college-name mb-2">Swami Vivekanand Inter College</h6>
            <p class="mb-1"><strong>Address:</strong> Ikauna, Shrawasti</p>
            <p class="mb-1"><strong>Student Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
            <p class="mb-1"><strong>Class:</strong> {{ $student->class }}</p>
            <p class="mb-1"><strong>Amount Paid:</strong> ₹{{ number_format($fee->amount, 2) }}</p>
            <p class="mb-1"><strong>Order ID:</strong> {{ $fee->razorpay_order_id }}</p>
            <p class="mb-0"><strong>Payment ID:</strong> {{ $fee->razorpay_payment_id }}</p>
        </div>

        <div class="mt-4">
            <a href="/" class="btn btn-outline-secondary btn-sm px-4">Go Home</a>
        </div>
    </div>

</body>
</html>
