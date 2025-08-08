<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        #aws bucket url
        $bucketUrl = config('filesystems.disks.s3.bucket');
        return [
            'id' => $this->id,
            'description' => $this->description,
            'file' => $this->file,
            'full_url' => 'https://' . $bucketUrl . '.s3.amazonaws.com/' . $this->file,
        ];
    }
}
