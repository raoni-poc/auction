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
        $company = Company::paginate();
        return CompanyResource::collection($company);
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->all();
        $data['account_status_id'] = 2;
        $company = Company::create($data);
        $company->refresh();
        return new CompanyResource($company);
    }

    public function show(Company $company)
    {
        return new CompanyResource($company);
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->fill($request->all());
        $company->save();
        $company->refresh();
        return new CompanyResource($company);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json([], 204);
    }
}
