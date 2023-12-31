<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicilanBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank',
        'nomor_tagihan',
        'name',
        'total',
        'status'
    ];
}
