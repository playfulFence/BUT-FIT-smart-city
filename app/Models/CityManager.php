<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityManager extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,"manager_id","id");
    }

    public function ticket(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Ticket::class,"city_manager_id","manager_id");
    }

}
