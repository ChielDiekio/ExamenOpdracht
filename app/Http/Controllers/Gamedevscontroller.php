<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamedevs;
use App\Models\Games;


class Gamedevscontroller extends Controller
{

    public function index()
    {
        $gamedevs = Gamedevs::all();

       return view("index", [ 'gamedevs' => $gamedevs]);

//        return view("index", [Gamedevs::with('games')->get()]);
    }


    public function show(Gamedev $gamedev)
    {

        $gamedev = Gamedev::where('id',$gamedev->id);
        return view("show", ['gamedev'=>$gamedev]);


    }



}
