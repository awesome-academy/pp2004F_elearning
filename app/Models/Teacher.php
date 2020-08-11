<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'about',
        'image',
    ];

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }
}
