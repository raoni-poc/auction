<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateRequest;
use App\Http\Resources\StateResource;
use App\Models\State;
use App\Http\Filters\StateFilter;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $filter = app(StateFilter::class);
        $query = State::query();
        $filterQuery = $query->filtered($filter);
        $state = $filter->hasFilterParameter() ? $filterQuery->get(): $filterQuery->paginate();
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
