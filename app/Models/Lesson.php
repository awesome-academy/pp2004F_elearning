<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'course_id',
        'content',
        'name',
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
}
