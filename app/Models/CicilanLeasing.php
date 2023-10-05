<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicilanLeasing extends Model
{
    use HasFactory;
    protected $fillable = [
        'leasing',
        'nomor_tagihan',
        'name',
        'total',
        'status'
    ];
}
