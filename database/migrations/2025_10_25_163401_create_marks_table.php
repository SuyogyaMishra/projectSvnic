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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();

            // Foreign key to students table
            $table->unsignedBigInteger('student_id');

            // Subject details
            $table->string('subject');
            $table->integer('max_marks');
            $table->integer('score');

            // Optional fields
            $table->string('exam_type')->nullable(); // e.g., Midterm, Final
            $table->string('semester')->nullable();

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
