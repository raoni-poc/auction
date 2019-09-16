<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $address = Address::paginate();
        return AddressResource::collection($address);
    }

    public function store(AddressRequest $request)
    {
        $address = Address::create($request->all());
        $address->refresh();
        return new AddressResource($address);
    }

    public function show(Address $address)
    {
        return new AddressResource($address);
    }

    public function update(AddressRequest $request, Address $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new AddressResource($address);
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
