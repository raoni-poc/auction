<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $address = Country::paginate();
        return CountryResource::collection($address);
    }

    public function store(CountryRequest $request)
    {
        $address = Country::create($request->all());
        $address->refresh();
        return new CountryResource($address);
    }

    public function show(Country $address)
    {
        return new CountryResource($address);
    }

    public function update(CountryRequest $request, Country $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new CountryResource($address);
    }

    public function destroy(Country $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
