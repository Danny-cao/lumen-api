<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getPokemon()
    {
        return response()->json(Pokemon::with('abilities')->get());
    }

    public function getSinglePokemon(Request $request, $name)
    {

        $pokemon = Pokemon::With('abilities')->where('name', $name)->get();


        return response()->json($pokemon);
    }


    public function createPokemon()
    {

    }

    // update
    // delete
}
