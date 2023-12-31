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
        Schema::create('tarik_tunais', function (Blueprint $table) {
            $table->id();
            $table->enum('bank', ['BRI', 'BCA', 'BNI', 'MANDIRI']);
            $table->string('name');
            $table->string('rekening');
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
        Schema::dropIfExists('tarik_tunais');
    }
};
