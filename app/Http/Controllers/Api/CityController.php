<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $address = City::paginate();
        return CityResource::collection($address);
    }

    public function store(CityRequest $request)
    {
        $address = City::create($request->all());
        $address->refresh();
        return new CityResource($address);
    }

    public function show(City $address)
    {
        return new CityResource($address);
    }

    public function update(CityRequest $request, City $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new CityResource($address);
    }

    public function destroy(City $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
