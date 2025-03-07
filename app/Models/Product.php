<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // ✅ Enables factory support for testing

    protected $fillable = ['name', 'qty', 'price','description']; // ✅ Allows mass assignment
}
