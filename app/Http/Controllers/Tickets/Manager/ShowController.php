<?php

namespace App\Http\Controllers\Tickets\Manager;

use App\Http\Controllers\Controller;
use App\Models\Managers;
use App\Models\Ticket;
use App\Models\TicketStatuses;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Ticket $ticket)
    {
        if($ticket->manager_id == null || $ticket->manager_id == Auth::id()) {
            $images = $ticket->image()->take(3)->get();

            $comments = $ticket->ticketComment()->paginate(10);

            $status = TicketStatuses::find($ticket->ticket_status_id);

            $manager = Managers::where('user_id', Auth::id())->get();
            $problems = $manager[0]->problems;

            return view('tickets.manager_show', compact('ticket', 'status', 'images', 'comments', 'problems'));
        }else{
            return redirect(route('manager.tickets.index'))->withErrors([
                'formError' => 'Tento tiket nespravujete',
            ]);
        }
    }
}
