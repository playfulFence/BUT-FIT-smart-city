<?php

namespace App\Services\Citymanager;


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
    public function appliedTechs()
    {
        return Repairs::join('users', 'users.id', '=', 'repairs.user_id')->select('users.name', 'users.lastname','users.email', 'users.phone', 'repairs.id')->where('repairs.approved', '=', 0)->paginate(10);
    }

    public function getAllMyProblems()
    {
        return Problems::where('manager_id', Auth::id())->paginate(10);
    }

    public function getSolved()
    {
        return Problems::where('state', 2)->where('manager_id', Auth::id())->paginate(10);
    }

    public function viewNewUnsolved()
    {
        return Ticket::where('ticket_status_id','!=', 3)->orderBy('created_at', 'asc')->paginate(10);
    }

    public function viewAllTechs()
    {
        return User::join('repairs', 'repairs.user_id','=', 'users.id')->select('users.name','users.lastname', 'users.email', 'users.phone')->where('repairs.approved',1)->paginate(10);
    }
}
