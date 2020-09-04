<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'content',
        'question_id',
        'status',
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function results()
    {
        return $this->belongsToMany('App\Models\Result');
    }
}
