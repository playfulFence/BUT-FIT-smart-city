<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexOldController extends BaseController
{
    public function __invoke()
    {

        $tickets = $this->service->indexOld(Auth::user());

//        dd($tickets);
        $old = true;

        return view('tickets.index',compact('tickets','old'));

    }
}
