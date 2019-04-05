<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Requests\CarsRequest;

class CarsController extends Controller
{
    public function index()
    {
        return Car::all();
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
