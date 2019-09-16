<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StateRequest;
use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $address = State::paginate();
        return StateResource::collection($address);
    }

    public function store(StateRequest $request)
    {
        $address = State::create($request->all());
        $address->refresh();
        return new StateResource($address);
    }

    public function show(State $address)
    {
        return new StateResource($address);
    }

    public function update(StateRequest $request, State $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new StateResource($address);
    }

    public function destroy(State $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
