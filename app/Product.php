<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['kode', 'nama', 'stok', 'harga', 'deskripsi', 'foto', 'types_id'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }
}
