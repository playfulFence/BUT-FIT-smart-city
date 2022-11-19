<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CityManagerController extends Controller
{
    public function __invoke()
    {
        $user_id = Auth::id();

        $found_in_mangers_table = DB::select('select * from managers where user_id = '.$user_id);

        if ($found_in_mangers_table)
        {
            $user = Auth::user();
            return view('profile_citymanager',compact('user'));
        }
        // Shouldn't be reachable
        else return redirect(route('profile.index'));

    }
}
