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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('Anrede');
            $table->string('Adults');
            $table->string('Children');
            $table->string('arrival_date');
            $table->string('departure_date');
            $table->foreignId('room_id')->constrained('rooms')->cascadeOnDelete();
            $table->string('message');
            $table->string('anreisedatum')->nullable();
            $table->string('abreisedatum')->nullable();
            $table->string('erwachsene')->nullable();
            $table->string('kinder')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};