<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'name', 'points',
    ];
}
