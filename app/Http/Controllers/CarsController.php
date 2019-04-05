<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Requests\CarsRequest;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index(Request $request)
    {
        $take = $request->input('take');
        $skip = $request->input('skip');
        return Car::all()->slice($skip+1)->take($take);

        //ili:
        // return DB::table('cars')->skip($skip)->take($take)->get();   
    }

    public function store(CarsRequest $request)
    {
        return Car::create($request->all());
    }

    public function show($id)
    {
        return Car::findOrFail($id);
    }

    public function update(CarsRequest $request, Car $car)
    {
        $car->update($request->all());
        return $car;
    }

    public function destroy($id)
    {
        return Car::destroy($id);
    }
}
