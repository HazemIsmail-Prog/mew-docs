<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\StepResource;

class DocumentResource extends JsonResource
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
            'title' => $this->title,
            'from_id' => $this->from_id,
            'to_id' => $this->to_id,
            'created_by' => $this->created_by,
            'content' => $this->content,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            // type is in or out depend on from_id and to_id
            'type' => $this->to_id === auth()->user()->stakeholder_id ? 'in' : 'out',
            'stakeholder_name' => $this->to_id === auth()->user()->stakeholder_id ? $this->sender->name : $this->receiver->name,
            
            'incomplete_steps' => StepResource::collection($this->whenLoaded('incomplete_steps')),
            'tag_ids' => $this->whenLoaded('tags', fn() => $this->tags->pluck('id')),
            'follow_ids' => $this->whenLoaded('users', fn() => $this->users->pluck('id')),
            'contract_ids' => $this->whenLoaded('contracts', fn() => $this->contracts->pluck('id')),

        ];
    }
}
