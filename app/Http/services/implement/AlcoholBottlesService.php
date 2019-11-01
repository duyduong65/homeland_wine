<?php


namespace App\Http\services\implement;


use App\AlcoholBottle;
use App\Http\repositories\AlcoholBottlesRepositories;
use App\Http\services\AlcoholBottlesServiceInterface;

class AlcoholBottlesService implements AlcoholBottlesServiceInterface
{
    protected $alcoholRepositories;

    public function __construct(AlcoholBottlesRepositories $alcoholBottlesRepositories)
    {
        $this->alcoholRepositories = $alcoholBottlesRepositories;
    }

    function index()
    {
        $alcoholBottles = new AlcoholBottle();
        return $this->alcoholRepositories->getAll($alcoholBottles);
    }
}
