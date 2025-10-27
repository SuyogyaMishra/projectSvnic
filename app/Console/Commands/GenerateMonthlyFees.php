<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use App\Models\Fee;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class GenerateMonthlyFees extends Command
{
    protected $signature = 'fees:generate';
    protected $description = 'Generate monthly fee records for all students';

    public function handle()
    {
        $month = Carbon::now()->format('Y-m');
        $createdCount = 0;

        DB::transaction(function () use (&$createdCount, $month) {
            $students = Student::select('id', 'class')->get();

            foreach ($students as $student) {
                $exists = Fee::where('student_id', $student->id)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->whereMonth('created_at', Carbon::now()->month+1)
                    ->exists();

                if (!$exists) {
                    $fee = match ((int)$student->class) {
                        1  => 300,
                        2  => 350,
                        3  => 400,
                        4  => 450,
                        5  => 500,
                        6  => 550,
                        7  => 600,
                        8  => 650,
                        9  => 700,
                        10 => 750,
                        11 => 800,
                        12 => 850,
                        default => 900, // fallback for unknown / higher classes
                    };
                    $previous_fee = Fee::where('student_id', $student->id)
                        ->orderBy('created_at', 'desc')
                        ->value('amount') ?? 0;

                    $fee += (int)$previous_fee;
                    if ((int)$previous_fee !== 0) {
                        Fee::where('student_id', $student->id)
                            ->orderBy('created_at', 'desc')
                            ->first()
                            ->update([
                                'amount' => $fee,
                                'currency' => 'INR',
                                'status' => 0, // 0 = created
                                'receipt' => 'rcpt_' . $student->id . '_' . time(),
                            ]);;
                    } else {
                        Fee::create([
                            'student_id' => $student->id,
                            'amount' => $fee,
                            'currency' => 'INR',
                            'status' => 0, // 0=created
                            'receipt' => 'rcpt_' . $student->id . '_' . time(),
                        ]);
                    }
                    $createdCount++;
                }
            }
        });

        $this->info("✅ $createdCount fee records created for $month.");
    }
}
