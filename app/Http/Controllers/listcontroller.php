<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Gamedevs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    //functie die data uit 'Gamedavs; haalt en stuurt naar de index.blade view1
    public function index()
        {
            $gamedevs = Gamedevs::all();
            return view("index", [ 'gamedevs' => $gamedevs]);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gamedevs  $gamedevs
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

//    public function show(Gamedevs $gamedevs)
//    {
//    echo "test";
//        return view('games.show')->with('Gamedevs',$gamedevs);
//    }

// Functie die die data laat zien aan hand van de id van gamedevs.naam
    public function showdata($gamedev){
        $games = DB::table('games')
            ->select('games.id','games.titel', 'games.uitgave datum', 'games.platform')
            ->join('gamedevs', 'games.gamedev_id', '=', 'gamedevs.id')
            ->where('gamedevs.naam', '=', $gamedev)
            ->get();

        return view("games.show", [ 'games' => $games]);
    }

}
