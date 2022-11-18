<?php

namespace App\Http\Controllers\Tickets\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $tickets = $this->service->index(Auth::user());

//        dd($tickets);
        return view('tickets.index',compact('tickets'));

    }
}
