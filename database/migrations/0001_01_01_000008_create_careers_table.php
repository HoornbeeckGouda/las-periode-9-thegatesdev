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
            $table->foreignId('courseyear_id')->constrained('courseyears', 'year');
            $table->foreignId('course_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};