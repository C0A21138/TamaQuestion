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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 32);
            $table->string('image_path', 255);
            $table->string('problem_statement', 255);
            $table->string('answer_1', 32);
            $table->string('answer_2', 32);
            $table->string('answer_3', 32);
            $table->string('answer_4', 32);
            $table->integer('correct_answer_num');
            $table->string('explanation', 255);
            $table->string('category', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
