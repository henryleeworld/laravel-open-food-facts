<?php

namespace App\Http\Controllers;

use OpenFoodFacts\Laravel\Facades\OpenFoodFacts;

class OpenFoodFactsController extends Controller
{
    public function index()
    {
        $openFood = OpenFoodFacts::find('Artisan Grilled Chicken');
        return view('open-food', compact('openFood'));
    }
}
