<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageSlider extends Model
{
    use HasFactory;

    protected $table = 'imageSliders';
    protected $guarded = ['id'];
}
