<?php

namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Services\Problems;
use Illuminate\Support\Facades\Auth;

class ViewProblemsController extends BaseController
{

    public function __invoke()
    {
        $problems = $this->service->getAllUnsolved();

        return view('problems.index', compact('problems'));
    }
}
