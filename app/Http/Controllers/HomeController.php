<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Fruit;

class HomeController extends Controller
{
    public function create(Request $request)
    {
       $request->validate([


        ]);
            }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $fruit = new Fruit;

        $fruit->Standerd = 13;
        $fruit->name="apple";
        $fruit->save();


        return view('home');
    }
}
