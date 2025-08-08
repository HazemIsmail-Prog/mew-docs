<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = [];

    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
