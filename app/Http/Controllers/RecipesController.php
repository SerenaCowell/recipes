<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipesController extends Controller
{

    public function index()
    {
        return view('recipes');
    }

    public function recipe($id)
    {
        return view('recipe', ['id' => $id]);
    }
}
