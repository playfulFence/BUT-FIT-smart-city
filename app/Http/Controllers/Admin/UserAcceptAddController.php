<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin;
use Illuminate\Support\Facades\Auth;

class UserAcceptAddController extends BaseController
{
    public function __invoke()
    {
        $newcomers = $this->service->getAllNewcomers();

        return view('admin.user_accept', compact('newcomers'));
    }
}
