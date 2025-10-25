<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();                        // Auto-increment primary key
            $table->string('name');               // Full name
            $table->string('fathersname');       // Father's name
            $table->string('email')->unique();    // Unique email
            $table->string('password');           // Hashed password
            $table->tinyInteger('role')->default(1);   // Role (e.g., 1 = student)
            $table->tinyInteger('status')->default(1); // Status (e.g., 1 = active)
            $table->timestamps();                 // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
