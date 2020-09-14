<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content',
        'lesson_id',
    ];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }

    public function results()
    {
        return $this->belongToMany('App\Models\Result');
    }
}
