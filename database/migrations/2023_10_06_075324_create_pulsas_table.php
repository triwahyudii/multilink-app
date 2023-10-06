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
        Schema::create('pulsas', function (Blueprint $table) {
            $table->id();
            $table->enum('provider', ['Indosat', 'Im3', 'XL', 'Telkomsel', '3']);
            $table->string('phone');
            $table->enum('nominal', ['5000', '10000', '20000', '50000', '100000']);
            $table->enum('status', ['Proses', 'Batal', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulsas');
    }
};
