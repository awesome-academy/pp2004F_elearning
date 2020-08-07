<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'description',
        'place',
        'timeStart',
        'timeEnd',
        'image',
        'teacher',
        'status',
    ];

    protected $hidden = [
        'id'
    ];
}
