<?php

namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Services\Citymanager;
use Illuminate\Support\Facades\Auth;

class ViewProblemsController extends BaseController
{

    public function __invoke()
    {
        $problems = $this->service->getAllMyProblems();

        return view('problems.index', compact('problems'));
    }
}
