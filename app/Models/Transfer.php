<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank',
        'name',
        'rekening',
        'total',
        'name_penerima',
        'rekening_penerima',
        'status'
    ];
}
