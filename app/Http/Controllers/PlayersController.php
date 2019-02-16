<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function get_all_players()
    {
        $player = Player::all();
        return response()->json([
            'data' => $player
        ]);
    }
    //
}
