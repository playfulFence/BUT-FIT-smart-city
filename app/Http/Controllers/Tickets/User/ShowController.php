<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Ticket $ticket)
    {

        if($ticket->user_id !== Auth::id()){
            return redirect(route('profile.index'));
        }
//        $ticket = Ticket::find($id);
//        dd($ticket);
//        if($ticket->id)
        return view('tickets.show',compact('ticket'));

    }
}
