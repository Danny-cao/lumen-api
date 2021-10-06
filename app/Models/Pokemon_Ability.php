<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon_Ability extends Model
{
    protected $fillable = [
        'pokemon_id', 'ability_id'
    ];

    protected $hidden = [
        'id',
    ];
}
