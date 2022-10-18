<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequirement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;


    public function technicalSpecialist(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TechnicalSpecialist::class,"technical_specialist_id","spec_id");
    }

    public function comment(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CommentServReq::class,"requirement","id");
    }

    public function problem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Problem::class);
    }
}
