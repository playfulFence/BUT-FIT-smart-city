<?php

namespace App\Http\Controllers\Problems;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('problems.create');
    }
}
