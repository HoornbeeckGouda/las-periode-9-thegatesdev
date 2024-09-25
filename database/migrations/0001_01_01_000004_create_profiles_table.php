<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();

            $table->string('first_name', 45);
            $table->string('initials', 5);
            $table->string('last_name', 45);
            $table->string('official_name', 145);

            $table->string('postal_code', 6);
            $table->string('street', 145);
            $table->unsignedMediumInteger('house_no');
            $table->string('house_no_addition', 10)->nullable();
            $table->string('city', 50);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
