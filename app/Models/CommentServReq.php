<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentServReq extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function sender(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,"sender_id","id");
    }

    public function ServiceRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ServiceRequirement::class,"requirement","id");
    }
}
