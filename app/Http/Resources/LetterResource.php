<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class LetterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'code' => $this->code,
            'internal' => $this->internal,
            'official' => $this->official,
            'has_attachments' => $this->has_attachments,
            'address' => $this->address,
            'prefix' => $this->prefix,
            'sender' => $this->sender,
            'receiver' => $this->receiver,
            'subject' => $this->subject,
            'copy_to' => $this->copy_to,
            'body' => $this->body,
            'line_height' => $this->line_height,
            'user' => new UserResource($this->whenLoaded('user')),
            'can_edit' => Auth::id() === $this->user_id,
            'can_delete' => Auth::id() === $this->user_id,
            'can_duplicate' => true,
        ];
    }
}
