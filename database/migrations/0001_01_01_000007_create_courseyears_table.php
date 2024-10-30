<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_years', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('short_name', 4);
            $table->date('start_date');
            $table->date('end_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_years');
    }
};
