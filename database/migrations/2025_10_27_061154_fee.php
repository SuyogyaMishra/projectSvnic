<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();

            // Foreign key to students table
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            // Razorpay details
            $table->string('razorpay_order_id')->nullable();
            $table->string('razorpay_payment_id')->nullable();
            $table->string('razorpay_signature')->nullable();

            // Fee details
            $table->decimal('amount', 10, 2); // total fee charged (e.g. 5000.00)
            $table->string('currency', 10)->default('INR');

            // Payment status: created, paid, failed, refunded, etc.
            $table->unsignedTinyInteger('status')->default(0)->comment('0=created, 1=paid, 2=failed, 3=refunded');

            // Optional tracking fields
            $table->string('receipt')->nullable();
            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};
