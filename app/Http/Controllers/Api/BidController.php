<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BidRequest;
use App\Http\Resources\BidResource;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function index(Request $request)
    {
        $address = Bid::paginate();
        return BidResource::collection($address);
    }

    public function store(BidRequest $request)
    {
        $address = Bid::create($request->all());
        $address->refresh();
        return new BidResource($address);
    }

    public function show(Bid $address)
    {
        return new BidResource($address);
    }

    public function update(BidRequest $request, Bid $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new BidResource($address);
    }

    public function destroy(Bid $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
