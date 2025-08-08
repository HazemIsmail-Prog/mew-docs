<?php

namespace App\Observers;

use App\Models\Attachment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;


class AttachmentObserver implements ShouldHandleEventsAfterCommit
{
    public function deleting(Attachment $attachment)
    {
        try {
            // Delete the file from S3
            $deleted = Storage::disk('s3')->delete($attachment->file);
    
            if (!$deleted) {
                Log::error('Failed to delete attachment file from S3: ' . $attachment->file);
                return response()->json(['error' => 'Failed to delete file from S3'], 500);
            }
    
            Log::info('Attachment file successfully deleted from S3: ' . $attachment->file);
        } catch (\Throwable $th) {
            // Log the exception message and return an error response
            Log::error('Exception occurred while deleting attachment file from S3: ' . $th->getMessage());
        }
    }

}
