<?php

namespace App\Http\Controllers\Tickets\Manager;

use App\Http\Requests\Tickets\AddCommentRequest;
use App\Http\Requests\Tickets\AddImageRequest;
use App\Models\Ticket;
use App\Models\TicketComments;
use Illuminate\Support\Facades\Auth;


class AddCommentController extends BaseController
{
    public function __invoke(Ticket $ticket,AddCommentRequest $request)
    {

        //todo add check moderator
//        if($ticket->user_id != Auth::id()){
//            return redirect(route('profile.index'));
//        }

        $data = $request->validated();

        $message = $this->service->addComment($data,$ticket);

        if(!$message){
            return redirect(route('manager.tickets.show',$ticket->id))->withErrors([
                'content' => $message,
            ]);
        }

        return redirect((route('manager.tickets.show',$ticket->id)));

    }
}
