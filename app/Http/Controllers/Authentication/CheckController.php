<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginRequest;
use Illuminate\Support\Facades\Auth;

class CheckController extends BaseController
{
    public function __invoke(LoginRequest $request)
    {

        $data = $request->validated();

        $result = $this->service->check($data);

        if($result){
            return redirect(route('profile.index'));
        }

        return redirect(route('authentication.index'))->withErrors([
            'email' => 'Failed to login',
        ]);

    }
}
