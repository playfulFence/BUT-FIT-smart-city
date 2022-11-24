<?php

namespace App\Services\Admin;


use App\Models\Images;
use App\Models\Repairs;
use App\Models\Ticket;
use App\Models\TicketComments;
use App\Models\Problems;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Service
{
    public function getAllProblems()
    {
        return Problems::join('users', 'users.id', '=', 'problems.manager_id')->select('users.name', 'users.lastname', 'problems.title','users.id')->where('state','!=',2)->paginate(10);
    }

    public function getSolved()
    {
        return Problems::where('state', '=', 2)->paginate(10);
    }

    public function getAllNewcomers()
    {
        return User::where('approved', 0)->paginate(10);
    }

    public function viewAllTechs()
    {
        return User::join('repairs', 'repairs.user_id','=', 'users.id')->select('users.name','users.lastname', 'users.email', 'users.phone')->where('repairs.approved',1)->paginate(10);
    }
}
