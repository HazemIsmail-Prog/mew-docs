<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];

    public function sender()
    {
        return $this->belongsTo(Stakeholder::class, 'from_id');
    }

    public function receiver()
    {
        return $this->belongsTo(Stakeholder::class, 'to_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function contracts()
    {
        return $this->belongsToMany(Contract::class);
    }

    public function steps()
    {
        return $this->hasMany(Step::class)->orderBy('order');
    }

    public function incomplete_steps()
    {
        return $this->hasMany(Step::class)->where('is_completed', false)->orderBy('order');
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }
}
