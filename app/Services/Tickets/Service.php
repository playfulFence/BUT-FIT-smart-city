<?php

namespace App\Services\Tickets;


use App\Models\Images;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Service
{

    public function index($user)
    {
        return $user->tickets()->where('ticket_status_id','!=',3)->paginate(10);
    }


    public function store($data)
    {

        $images = $data['image'];
        unset($data['image']);
        $data['user_id'] = Auth::id();
        $data['ticket_status_id'] = 1;

        $ticket = Ticket::create($data);

        if(!$ticket){
            return "Formulář se nepodařilo uložit";
        }

        foreach ($images as $image){
            $path = $image->store('images/tickets');
            $newImage = Images::create(['path' => $path, 'ticket_id' => $ticket->id]);
            if(!$newImage){
                return "Obrázek se nepodařilo uložit";
            }
        }


        return null;

    }
}
