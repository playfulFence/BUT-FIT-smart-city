<?php

namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Services\Citymanager;
use Illuminate\Support\Facades\Auth;

class ViewTechniciansAppliesController extends BaseController
{

    public function __invoke()
    {
        $techs = $this->service->appliedTechs();

        return view('technicians.view_applicants', compact('techs'));
    }
}
