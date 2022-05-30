<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//toko baut - circle slider
class Tank extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excert', 'body'];
    protected $guarded = ['id'];
}

