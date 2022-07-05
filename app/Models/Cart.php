<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   public $table =  'cart';
   public $table_1 = 'user';
   public $table_2 = 'product';
    use HasFactory;
}
