<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
//    use HasFactory;

    protected $table = 'games';

    public function gamedevs()
    {
        return $this->belongsTo('App\Models\Gamedevs');

    }
}
