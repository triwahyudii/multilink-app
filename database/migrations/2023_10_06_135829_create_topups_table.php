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
        Schema::create('topups', function (Blueprint $table) {
            $table->id();
            $table->enum('game', ['Domino Higgs', 'PUBG', 'Mobile Legends', 'Call Of Duty', 'Free Fire']);
            $table->string('user_id');
            $table->enum('nominal', ['500', '1000', '2000', '3000', ]);
            $table->enum('status', ['Proses', 'Batal', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topups');
    }
};
