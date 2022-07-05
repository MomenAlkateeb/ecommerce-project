<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
 public $table = 'catagories';
 public $primarykey = 'id';
 public $incrementing = true;
 
    use HasFactory;
}
