<?php


namespace App\Http\Controllers\Citymanager;

use App\Http\Controllers\Controller;
use App\Services\Citymanager;
use Illuminate\Support\Facades\Auth;

class ArchieveController extends BaseController
{
    public function __invoke()
    {
        $problems = $this->service->getSolved();

        return view('citymanager_problems_archieve', compact('problems'));
    }
}
