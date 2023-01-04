<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class CarController extends Controller
{
    public function listCarsForDirector()
    {
        $position = Position::find(1);

        $categories = $position->categories;

        return view('welcome', ['categories' => $categories]);
    }

    public function listCarsForHR()
    {
        $position = Position::find(2);

        $categories = $position->categories;

        return view('welcome', ['categories' => $categories]);
    }

    public function listCarsForDeveloper()
    {
        $position = Position::find(3);

        $categories = $position->categories;

        return view('welcome', ['categories' => $categories]);
    }
}
