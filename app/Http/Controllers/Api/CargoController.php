<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CargoRequest;
use App\Http\Resources\CargoResource;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(Request $request)
    {
        $cargo = Cargo::paginate();
        return CargoResource::collection($cargo);
    }

    public function store(CargoRequest $request)
    {
        $cargo = Cargo::create($request->all());
        $cargo->refresh();
        return new CargoResource($cargo);
    }

    public function show(Cargo $cargo)
    {
        return new CargoResource($cargo);
    }

    public function update(CargoRequest $request, Cargo $cargo)
    {
        $cargo->fill($request->all());
        $cargo->save();
        $cargo->refresh();
        return new CargoResource($cargo);
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return response()->json([], 204);
    }
}
