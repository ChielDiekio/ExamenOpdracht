<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamedevs extends Model
{
//    use HasFactory;


    protected $table = 'gamedevs';


    public function games()
    {
        return $this->hasMany('App\Models\Games');

    }
}
