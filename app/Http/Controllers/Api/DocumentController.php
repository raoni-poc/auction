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
        $address = Document::paginate();
        return DocumentResource::collection($address);
    }

    public function store(DocumentRequest $request)
    {
        $address = Document::create($request->all());
        $address->refresh();
        return new DocumentResource($address);
    }

    public function show(Document $address)
    {
        return new DocumentResource($address);
    }

    public function update(DocumentRequest $request, Document $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new DocumentResource($address);
    }

    public function destroy(Document $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
