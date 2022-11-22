<?php

namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Models\Repairs;
use App\Services\Citymanager;
use Illuminate\Support\Facades\Auth;

class AcceptTechApplicantController extends BaseController
{

    public function __invoke(Repairs $tech)
    {
        $tech->approved = 1;
        $tech->save();
        return redirect(route('citymanager.new_techs'));
    }
}
