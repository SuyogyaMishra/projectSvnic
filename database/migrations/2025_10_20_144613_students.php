<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            // Basic Details
            $table->string('admission_no')->unique();
            $table->string('roll_no')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('date_of_birth');

            // Academic Info
            $table->string('class');
            $table->string('section')->nullable();
            $table->year('admission_year')->nullable();

            // Contact Info
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            // Parent / Guardian Info
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('guardian_phone')->nullable();

            // System Info
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
