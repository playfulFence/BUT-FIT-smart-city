<?php

namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Services\Problems;
use Illuminate\Support\Facades\Auth;

class ViewTechniciansController extends BaseController
{

    public function __invoke()
    {
        $techs = $this->service->viewAllTechs();

        return view('technicians.view_techs_list', compact('techs'));
    }
}
