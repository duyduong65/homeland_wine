<?php

namespace App\Http\Controllers;

use App\Http\services\AlcoholBottlesServiceInterface;
use Illuminate\Http\Request;

class AlcoholBottlesController extends Controller
{
    protected $alcoholBottlesService;

    public function __construct(AlcoholBottlesServiceInterface $alcoholBottlesService)
    {
        $this->alcoholBottlesService = $alcoholBottlesService;
    }

    public function index()
    {
        $alcoholBottles = $this->alcoholBottlesService->index();
        return view('alcoholBottles.index',compact('alcoholBottles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
