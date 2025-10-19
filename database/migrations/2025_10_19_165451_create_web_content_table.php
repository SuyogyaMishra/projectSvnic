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
        Schema::create('web_content', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('HeroTitle')->nullable();
            $table->text('Hero_Description')->nullable();
            $table->integer('Years')->nullable();
            $table->integer('Student')->nullable();
            $table->integer('Success')->nullable();
            $table->text('Mission_Statement')->nullable();
            $table->text('Vision_Statement')->nullable();
            $table->string('schoolPic')->nullable(); // For image file name or path
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_content');
    }
};
