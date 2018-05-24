<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
       public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'completed', 'priority',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
}
