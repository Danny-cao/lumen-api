<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $fillable = [
        'id', 'name'
    ];

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon__abilities', 'ability_id', 'pokemon_id');
    }
}
