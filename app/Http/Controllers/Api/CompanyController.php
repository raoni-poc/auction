<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $address = Company::paginate();
        return CompanyResource::collection($address);
    }

    public function store(CompanyRequest $request)
    {
        $address = Company::create($request->all());
        $address->refresh();
        return new CompanyResource($address);
    }

    public function show(Company $address)
    {
        return new CompanyResource($address);
    }

    public function update(CompanyRequest $request, Company $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new CompanyResource($address);
    }

    public function destroy(Company $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
