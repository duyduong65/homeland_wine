<?php


namespace App\Http\repositories\eloquent;


use App\Http\repositories\AlcoholBottlesRepositories;

class AlcoholBottlesEloquent implements AlcoholBottlesRepositories
{

    function getAll($obj)
    {
        return $obj->all();
    }
}
