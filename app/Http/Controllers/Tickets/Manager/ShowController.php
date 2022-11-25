<?php

namespace App\Http\Controllers\Tickets\Manager;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\TicketStatuses;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Ticket $ticket)
    {
        $images = $ticket->image()->take(3)->get();

        $comments = $ticket->ticketComment()->paginate(10);

        $status = TicketStatuses::find($ticket->ticket_status_id);

        return view('tickets.manager_show',compact('ticket','status','images','comments'));

    }
}
