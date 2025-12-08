<?php

namespace App\Http\Controllers;

use OpenFoodFacts\Laravel\Facades\OpenFoodFacts;

class OpenFoodFactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $openFood = OpenFoodFacts::find('Artisan Grilled Chicken Pizza');
        return view('open-food', compact('openFood'));
    }
}
