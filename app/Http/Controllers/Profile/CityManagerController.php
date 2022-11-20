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

        $is_manager = DB::select('select * from managers where user_id = '.$user_id.' and approved = 1');

        if ($is_manager)
        {
            $user = Auth::user();
            $is_admin = DB::select('select * from admins where user_id = '.$user_id.' and approved = '.'1');
            $is_tech = DB::select('select * from repairs where user_id = '.$user_id.' and approved = '.'1');
            return view('profile_citymanager',compact(['user', 'is_admin', 'is_tech']));
        }
        // Shouldn't be reachable
        else return redirect(route('profile.index'));

    }
}
