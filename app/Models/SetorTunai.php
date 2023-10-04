<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetorTunai extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank',
        'name',
        'rekening',
        'total',
        'status'
    ];
}
