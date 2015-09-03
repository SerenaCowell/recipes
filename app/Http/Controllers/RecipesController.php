<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipesController extends Controller
{

    public function index()
    {
    	$recipes = Recipe::all();
        return view('recipes', ['recipes' => $recipes]);
    }

    public function recipe($id)
    {
    	$recipe = Recipe::find($id);

        return view('recipe', ['recipe' => $recipe]);
    }
}