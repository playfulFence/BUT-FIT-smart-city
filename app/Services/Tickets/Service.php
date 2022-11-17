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
        return $user->tickets()->leftJoin('ticket_statuses','tickets.ticket_status_id','ticket_statuses.id')->select('tickets.id','name','title','ticket_status_id')->where('ticket_status_id','!=',3)->paginate(10);
//        ->where('ticket_status_id','!=',3)
    }


    public function store($data)
    {
        $images=null;
        if(isset($data['image'])){
            $images = $data['image'];
            unset($data['image']);
        }
        $data['user_id'] = Auth::id();
        $data['ticket_status_id'] = 1;

        $ticket = Ticket::create($data);

        if(!$ticket){
            return "Formulář se nepodařilo uložit";
        }

        if($images) {
            foreach ($images as $image) {
                $path = $image->store('public/images/tickets');
                $path = str_replace('public/','/',$path);
                $newImage = Images::create(['path' => $path, 'ticket_id' => $ticket->id]);
                if (!$newImage) {
                    return "Obrázek se nepodařilo uložit";
                }
            }
        }


        return null;

    }
}
