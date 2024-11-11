<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_year_id')->constrained();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->unique(['course_year_id', 'course_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
