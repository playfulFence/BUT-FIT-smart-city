<?php


namespace App\Http\Controllers\Manager\Problems;

class IndexOldController extends BaseController
{
    public function __invoke()
    {
        $problems = $this->service->getSolved();

        return view('citymanager_problems_archieve', compact('problems'));
    }
}
