<?php

namespace App\Http\Controllers\Registration;

use App\Http\Requests\Registration\StoreRequest;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $user = $this->service->store($data);

        if(!$user){
            return redirect(route('registration.create'))->withErrors([
                'formError' => 'Uživatele se nepodařilo uložit',
            ]);
        }

        Auth::login($user);
        return redirect()->intended(route('profile.index'));

    }
}
