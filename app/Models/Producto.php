<?php

namespace App\Models;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = ['nombre', 'precio'];
    
}
