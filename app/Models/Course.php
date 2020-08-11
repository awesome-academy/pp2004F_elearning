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
        'teacher_id',
        'status',
    ];

    protected $hidden = [
        'id'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function category()
    {
        $this->belongsTo('\App\Models\Category');
    }
}
