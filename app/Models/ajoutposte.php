<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ajoutposte extends Model
{
    protected $table = 'ajoutpostes';

   protected $fillable = [
        'nom',
        'poste',
        'telephone',
        'email',
        'image',
    ];
}
