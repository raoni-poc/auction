<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferTypeRequest;
use App\Http\Resources\OfferTypeResource;
use App\Models\OfferType;
use Illuminate\Http\Request;

class OfferTypeController extends Controller
{
    public function index(Request $request)
    {
        $offerType = OfferType::paginate();
        return OfferTypeResource::collection($offerType);
    }

    public function store(OfferTypeRequest $request)
    {
        $offerType = OfferType::create($request->all());
        $offerType->refresh();
        return new OfferTypeResource($offerType);
    }

    public function show(OfferType $offerType)
    {
        return new OfferTypeResource($offerType);
    }

    public function update(OfferTypeRequest $request, OfferType $offerType)
    {
        $offerType->fill($request->all()); /*TODO o Nome já esta sendo utilizado ao editar*/
        $offerType->save();
        $offerType->refresh();
        return new OfferTypeResource($offerType);
    }

    public function destroy(OfferType $offerType)
    {
        $offerType->delete();
        return response()->json([], 204);
    }
}
