<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CargoRequest;
use App\Http\Resources\CargoResource;
use App\Models\Cargo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(Request $request)
    {
        $address = Cargo::paginate();
        return CargoResource::collection($address);
    }

    public function store(CargoRequest $request)
    {
        $address = Cargo::create($request->all());
        $address->refresh();
        return new CargoResource($address);
    }

    public function show(Cargo $address)
    {
        return new CargoResource($address);
    }

    public function update(CargoRequest $request, Cargo $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new CargoResource($address);
    }

    public function destroy(Cargo $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
