<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'nama',
        'stok',
        'harga',
        'deskripsi',
        'foto',
        'types_id',
];
}
