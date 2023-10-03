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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->enum('bank', ['BRI', 'BCA', 'BNI', 'MANDIRI']);
            $table->string('name');
            $table->string('rekening');
            $table->string('total');
            $table->string('name_penerima');
            $table->string('rekening_penerima');
            $table->enum('status', ['unpaid', 'paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
