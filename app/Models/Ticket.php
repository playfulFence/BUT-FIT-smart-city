<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,"author_id","id");
    }

    public function cityManager(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CityManager::class,"city_manager_id","manager_id");
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CommentTicket::class,"ticket_id","id");
    }

    public function image(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function problem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Problem::class);
    }
}
