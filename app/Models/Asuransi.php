<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asuransi extends Model
{
    use HasFactory;
    protected $fillable = [
        'ktp',
        'name',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'status_pernikahan',
        'phone',
        'email',
        'negara',
        'kelas',
        'alamat',
        'kode_pos',
        'kk',
        'status_keluarga',
        'jumlah_anak',
        'nomor_rekening',
        'pemilik_rekening',
        'status'
    ];
}
