<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    
    
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'password', 'role'];


}
