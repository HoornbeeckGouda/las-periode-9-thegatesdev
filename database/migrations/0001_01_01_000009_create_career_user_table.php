<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('career_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unique(['career_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_user');
    }
};
