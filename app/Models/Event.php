<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'image',
        'message',
        'type',
        'year',
        'voir_plus',
    ];
}
