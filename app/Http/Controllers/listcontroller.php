<?php

namespace App\Http\Controllers;

//import models
use App\Models\Games;
use App\Models\Gamedevs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listcontroller extends Controller
{

    public function index()
    {
        //selecteerd alle data uit de gamedevs tabel
        $gamedevs = Gamedevs::all();

        //geeft de data aan de index.blade view in variable $gamedevs
        return view("index", ['gamedevs' => $gamedevs]);
    }


    public function showdata($gamedev)
    {
        //maakt connection met games tabel
        $games = DB::table('games')

            //pakt de data: id, titel, uitgave datum, en platform uit de games tabel
            ->select('games.id', 'games.titel', 'games.uitgave datum', 'games.platform')

            //gamedevs_id is gelijk aan gamedev_id in de 'games' tabel
            ->join('gamedevs', 'games.gamedev_id', '=', 'gamedevs.id')

            //selecteert de data van tabel waar naam gelijk is aan gamedevs_naam
            ->where('gamedevs.naam', '=', $gamedev)
            ->get();

        //geeft de data aan de show.blade view in variable $games
        return view("games.show", ['games' => $games]);
    }

}
