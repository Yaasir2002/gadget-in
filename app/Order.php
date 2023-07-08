<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['kode', 'tgl', 'jumlah', 'keterangan', 'customers_id', 'products_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
