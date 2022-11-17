<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\TicketStatuses;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Ticket $ticket)
    {

        if($ticket->user_id !== Auth::id()){
            return redirect(route('profile.index'));
        }
        $images = $ticket->image;

        $status = TicketStatuses::find($ticket->ticket_status_id);
//        $ticket = Ticket::find($id);
//        dd($status);
//        if($ticket->id)
        return view('tickets.show',compact('ticket','status','images'));

    }
}
