<?php

namespace App\Services\Registration;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Service
{

    public function store($data): User
    {
        return User::create($data);
    }
}
