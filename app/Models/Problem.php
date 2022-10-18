<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function ticket(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function cityManager(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CityManager::class,"city_manager_id","manager_id");
    }

    public function requirement(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ServiceRequirement::class,"problem_id","id");
    }
}
