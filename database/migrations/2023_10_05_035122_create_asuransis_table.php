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
        Schema::create('asuransis', function (Blueprint $table) {
            $table->id();
            $table->string('ktp');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('status_pernikahan', ['Menikah', 'Lajang', 'Cerai']);
            $table->string('handphone');
            $table->string('email');
            $table->string('negara');
            $table->integer('kelas');
            $table->text('alamat');
            $table->integer('kode_pos');
            $table->string('kk');
            $table->enum('status_keluarga', ['KP', 'Istri', 'Anak']);
            $table->integer('jumlah_anak');
            $table->string('nomor_rekening');
            $table->string('pemilik_rekening');
            $table->enum('status', ['Proses', 'Batal', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asuransis');
    }
};
