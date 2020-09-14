<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'user_id',
        'lesson_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public function answers()
    {
        return $this->belongsToMany('App\Models\Answer');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Models\Question');
    }
}
