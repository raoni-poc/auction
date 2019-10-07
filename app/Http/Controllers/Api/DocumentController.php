<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Http\Resources\DocumentResource;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $document = Document::paginate();
        return DocumentResource::collection($document);
    }

    public function store(DocumentRequest $request)
    {
        $document = Document::create($request->all());
        $document->refresh();
        return new DocumentResource($document);
    }

    public function show(Document $document)
    {
        return new DocumentResource($document);
    }

    public function update(DocumentRequest $request, Document $document)
    {
        $document->fill($request->all());
        $document->save();
        $document->refresh();
        return new DocumentResource($document);
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return response()->json([], 204);
    }
}
