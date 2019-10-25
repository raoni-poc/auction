<?php

namespace App\Http\Controllers\Api;

use App\Http\Filters\CityFilter;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $filter = app(CityFilter::class);
        $query = City::query();
        $filterQuery = $query->filtered($filter);
        $city = $filter->hasFilterParameter() ? $filterQuery->get(): $filterQuery->paginate();
        return CityResource::collection($city);
    }

    public function store(CityRequest $request)
    {
        $city = City::create($request->all());
        $city->refresh();
        return new CityResource($city);
    }

    public function show(City $city)
    {
        return new CityResource($city);
    }

    public function update(CityRequest $request, City $city)
    {
        $city->fill($request->all());
        $city->save();
        $city->refresh();
        return new CityResource($city);
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json([], 204);
    }
}
