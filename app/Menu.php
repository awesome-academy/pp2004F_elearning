<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'parentId',
        'href'
    ];

    protected $hidden = [
        'id'
    ];
}
