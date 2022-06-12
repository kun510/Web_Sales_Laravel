<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class themsuaxoaModel extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'idProduct',
        'tenSp',
        'gia',
        'giaSale',
        'loaiSp',
        'quantity',
        'imgProduct',
        'property',
        'hang'
    ];
}
