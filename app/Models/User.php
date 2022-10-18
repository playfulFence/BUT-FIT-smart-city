<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function admin(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Admin::class,"admin_id","id");
    }

    public function technicalSpecialist(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TechnicalSpecialist::class,"spec_id","id");
    }

    public function cityManager(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CityManager::class,"manger_id","id");
    }

    public function ticket(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function senderCommentTicket(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CommentTicket::class,"sender_id","id");
    }

    public function senderCommentSR(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CommentServReq::class,"sender_id","id");
    }


}
