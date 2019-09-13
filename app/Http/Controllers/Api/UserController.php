<?php

namespace App\Http\Controllers\Api;

use App\Events\UserWasCreatedEvent;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt('random-password-' . date('Y-m-y m:i:s') . '-' . \mt_rand(0, 999999999999));
        $data['account_status_id'] = 3;
        $user = User::create($data);
        $user->refresh();
        \Log::debug(__METHOD__.' Usuário id:'.$user->id);
        event(new Registered($user));
//        event(new UserWasCreatedEvent($user));
        return new UserResource($user);
    }


    public function index(Request $request)
    {
        $query = User::query();
//        $query = $this->onlyTrashedIfRequested($request, $query);
        $users = $query->paginate(10);
        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([], 204);
    }
}
