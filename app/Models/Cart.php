<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id,'
    ];

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
