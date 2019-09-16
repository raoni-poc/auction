<?php

namespace App\Http\Controllers\Api;

use App\Common\OnlyTrashed;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountStatusRequest;
use App\Http\Resources\AccountStatusResource;
use App\Models\AccountStatus;
use Illuminate\Http\Request;

class AccountStatusController extends Controller
{
    use OnlyTrashed;

    public function index(Request $request)
    {
        $accountStatus = AccountStatus::paginate();
        return AccountStatusResource::collection($accountStatus);
    }

    public function store(AccountStatusRequest $request)
    {
        $accountStatus = AccountStatus::create($request->all());
        $accountStatus->refresh();
        return new AccountStatusResource($accountStatus);
    }

    public function show(AccountStatus $accountStatus)
    {
        return new AccountStatusResource($accountStatus);
    }

    public function update(AccountStatusRequest $request, AccountStatus $accountStatus)
    {
        $accountStatus->fill($request->all());
        $accountStatus->save();
        $accountStatus->refresh();
        return new AccountStatusResource($accountStatus);
    }

    public function destroy(AccountStatus $accountStatus)
    {
        $accountStatus->delete();
        return response()->json([], 204);
    }
}
