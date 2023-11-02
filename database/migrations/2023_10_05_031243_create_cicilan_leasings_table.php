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
        Schema::create('cicilan_leasings', function (Blueprint $table) {
            $table->id();
            $table->enum('leasing', ['FIF', 'WOM', 'BAF', 'ADIRA']);
            $table->string('nomor_tagihan');
            $table->string('name');
            $table->string('total');
            $table->enum('status', ['Proses', 'Batal', 'Selesai']);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cicilan_leasings');
    }
};
