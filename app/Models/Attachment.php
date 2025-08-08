<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Observers\AttachmentObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;


#[ObservedBy([AttachmentObserver::class])]
class Attachment extends Model
{
    protected $guarded = [];
}
