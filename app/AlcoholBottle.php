<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlcoholBottle extends Model
{
    protected $table = "alcoholBottles";

    protected $fillable = [
        'name','price','origin','description','image'
    ];
}
