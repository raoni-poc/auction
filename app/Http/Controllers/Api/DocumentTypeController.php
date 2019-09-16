<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentTypeRequest;
use App\Http\Resources\DocumentTypeResource;
use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function index(Request $request)
    {
        $address = DocumentType::paginate();
        return DocumentTypeResource::collection($address);
    }

    public function store(DocumentTypeRequest $request)
    {
        $address = DocumentType::create($request->all());
        $address->refresh();
        return new DocumentTypeResource($address);
    }

    public function show(DocumentType $address)
    {
        return new DocumentTypeResource($address);
    }

    public function update(DocumentTypeRequest $request, DocumentType $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new DocumentTypeResource($address);
    }

    public function destroy(DocumentType $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
