<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        $address = Offer::paginate();
        return OfferResource::collection($address);
    }

    public function store(OfferRequest $request)
    {
        $address = Offer::create($request->all());
        $address->refresh();
        return new OfferResource($address);
    }

    public function show(Offer $address)
    {
        return new OfferResource($address);
    }

    public function update(OfferRequest $request, Offer $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new OfferResource($address);
    }

    public function destroy(Offer $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
