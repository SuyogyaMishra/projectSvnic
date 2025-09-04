<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('admissions_table', function (Blueprint $table) {
            $table->id();

            // Student Info
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone', 15); // 10-digit but kept extra for country codes
            $table->date('dob');
            $table->enum('gender', ['Male', 'Female']);

            // Academic
            $table->string('class_applied'); // 1-8, 9-10, 11-12
            $table->string('stream')->nullable(); // Science, Commerce, Arts, Math, Home Science

            // Other
            $table->text('address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions_table');
    }
};
