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
        'price',
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function categories()
    {
        return $this->belongsToMany('\App\Models\Category');
    }

    public function carts()
    {
        return $this->belongsToMany('App\Models\Cart');
    }
    
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function refunds()
    {
        return $this->belongsToMany('App\Models\Refund');
    }
}
