<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_group', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->unsignedSmallInteger('group_id');
            $table->timestamps();
            
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_group');
    }
};
