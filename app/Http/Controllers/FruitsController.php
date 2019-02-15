<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;

class FruitsController extends Controller
{
    public function get_all_fruits()
    {
        $fruit = Fruit::all();
        return response()->json([
           'data' => $fruit
        ]);
    }


}
