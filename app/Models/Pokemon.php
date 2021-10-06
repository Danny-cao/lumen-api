<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'id', 'name', 'height', 'weight'
    ];

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'pokemon__abilities', 'pokemon_id', 'ability_id');
    }


}