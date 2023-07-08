<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public $timestamps = false;
    protected $fillable = ['kode', 'nama', 'stok', 'harga', 'deskripsi', 'foto', 'types_id'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }
=======
>>>>>>> 9becb36fdd0471ad1c22076ca1fb8cdf5abf712e
}
