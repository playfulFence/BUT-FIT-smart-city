<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSpecialist extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function requirement(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ServiceRequirement::class,"technical_specialist_id","spec_id");
    }

}
