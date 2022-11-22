<?php

namespace App\Services\Problems;


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

    public function viewAll()
    {
        return Ticket::paginate(10);
    }

    public function viewNewUnsolved()
    {
        return Ticket::where('ticket_status_id','!=', 3)->orderBy('created_at', 'asc')->paginate(10);
    }

    public function store($data)
    {

        $data['manager_id'] = Auth::id();
        $data['state'] = 1;

        $problem = Problems::create($data);

        if(!$problem){
            return "Formulář se nepodařilo uložit";
        }

        return null;

    }

    public function addComment($data,$ticket): ?string
    {
        $data['user_id'] = Auth::id();
        $data['ticket_id'] = $ticket->id;

        $message = null;

        $comment = TicketComments::create($data);
        if(!$comment){
            $message = 'Komentář se nepodařilo přidat';
        }

        return $message;


    }


    public function addImage($data,$ticket){


        $images=null;
        if(isset($data['image'])){
            $images = $data['image'];
            unset($data['image']);
        }

        $data['user_id'] = Auth::id();
        $data['ticket_id'] = $ticket->id;
        $message = null;

        if($images){
            foreach ($images as $image) {
                $path = $image->store('public/images/tickets');
                $path = str_replace('public/','storage/',$path);
                $newImage = Images::create(['path' => $path, 'ticket_id' => $ticket->id]);
                if (!$newImage) {
                    $message = "Obrázek se nepodařilo uložit";
                }
            }
        }



        return $message;
    }

}
