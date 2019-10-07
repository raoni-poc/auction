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
        $documentType = DocumentType::paginate();
        return DocumentTypeResource::collection($documentType);
    }

    public function store(DocumentTypeRequest $request)
    {
        $documentType = DocumentType::create($request->all());
        $documentType->refresh();
        return new DocumentTypeResource($documentType);
    }

    public function show(DocumentType $documentType)
    {
        return new DocumentTypeResource($documentType);
    }

    public function update(DocumentTypeRequest $request, DocumentType $documentType)
    {
        $documentType->fill($request->all());
        $documentType->save();
        $documentType->refresh();
        return new DocumentTypeResource($documentType);
    }

    public function destroy(DocumentType $documentType)
    {
        $documentType->delete();
        return response()->json([], 204);
    }
}
