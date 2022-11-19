<?php

namespace App\Services\Join;



use App\Models\Admins;
use App\Models\Managers;
use App\Models\Repairs;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function store($data)
    {

        $userId = Auth::id();
        $reply = [];
        $reply['message'] = 'Váš požadavek se nepodařilo uložit';
        $reply['newItem'] = null;


        if($data['join'] == 1) {
            if(!empty(Admins::where('user_id', $userId)->get()->toArray())){
                $reply['message'] = 'Již jste odeslali přihlášku';
            }else{
                $reply['newItem'] = Admins::create(['user_id' => $userId]);
            }
        }elseif ($data['join'] == 2){
            if(!empty(Managers::where('user_id', $userId)->get()->toArray())){
                $reply['message'] = 'Již jste odeslali přihlášku';
            }else{
                $reply['newItem'] =  Managers::create(['user_id' => $userId]);
            }
        }elseif ($data['join'] == 3){
            if(!empty(Repairs::where('user_id', $userId)->get()->toArray())){
                $reply['message'] = 'Již jste odeslali přihlášku';
            }else{
                $reply['newItem'] =  Repairs::create(['user_id' => $userId]);
            }
        }

        return $reply;

    }
}
