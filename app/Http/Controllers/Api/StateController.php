<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateRequest;
use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $state = State::paginate();
        return StateResource::collection($state);
    }

    public function store(StateRequest $request)
    {
        $state = State::create($request->all());
        $state->refresh();
        return new StateResource($state);
    }

    public function show(State $state)
    {
        return new StateResource($state);
    }

    public function update(StateRequest $request, State $state)
    {
        $state->fill($request->all());
        $state->save();
        $state->refresh();
        return new StateResource($state);
    }

    public function destroy(State $state)
    {
        $state->delete();
        return response()->json([], 204);
    }
}
