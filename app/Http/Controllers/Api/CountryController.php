<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\CountryFilter;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $country = Country::paginate();
        return CountryResource::collection($country);
    }

    public function store(CountryRequest $request)
    {
        $filter = app(CountryFilter::class);
        $query = Country::query();
        $filterQuery = $query->filtered($filter);
        $country = $filter->hasFilterParameter() ? $filterQuery->get(): $filterQuery->paginate();
        return new CountryResource($country);
    }

    public function show(Country $country)
    {
        return new CountryResource($country);
    }

    public function update(CountryRequest $request, Country $country)
    {
        $country->fill($request->all());
        $country->save();
        $country->refresh();
        return new CountryResource($country);
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json([], 204);
    }
}
