<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('group_permission', function (Blueprint $table) {
            $table->unsignedSmallInteger('group_id');
            $table->unsignedSmallInteger('permission_id');
            $table->timestamps();
            
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->primary(['group_id', 'permission_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('group_permission');
    }
};
