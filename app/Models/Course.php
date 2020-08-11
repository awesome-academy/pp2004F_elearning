<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'teacher_id',
        'status',
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function categories()
    {
        return $this->belongsToMany('\App\Models\Category');
    }
}
