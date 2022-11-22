<?php

namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Services\Citymanager;
use Illuminate\Support\Facades\Auth;

class ViewTicketListController extends BaseController
{

    public function __invoke()
    {
        $tickets = $this->service->viewNewUnsolved();

        return view('tickets.citymanager_index', compact('tickets'));
    }
}
