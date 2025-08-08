<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Attachment;
use App\Http\Resources\AttachmentResource;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{
    public function index(Document $document, Request $request)
    {
        $attachments = $document->attachments()->get();
        return AttachmentResource::collection($attachments);
    }

    // delete step
    public function destroy(Document $document, Attachment $attachment)
    {
        $attachment->delete();
        return response()->noContent();
    }

    // add step
    public function store(Document $document, Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf',
            'description' => 'required|string|max:255',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->storePublicly('Attachments/' . $document->id, 's3');

            // Ensure the file exists in S3
            if (!Storage::disk('s3')->exists($path)) {
                return response()->json(['error' => 'File not found on S3'], 404);
            }

            $attachment = Attachment::create([
                'file' => $path,
                'description' => $validated['description'],
                'document_id' => $document->id,
            ]);

            $attachment->refresh();
            return new AttachmentResource($attachment);
        }

        return response()->json(['error' => 'File upload failed'], 500);
    }

    // update step
    public function update(Attachment $attachment, Request $request)
    {
        $request->validate([
            'description' => 'required|string',
        ]);
        $attachment->update([
            'description' => $request->description,
        ]);
        $attachment->refresh();
        return new AttachmentResource($attachment);
    }

}
