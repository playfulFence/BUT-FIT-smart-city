<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __invoke()
    {
        $user_id = Auth::id();

        $is_admin = DB::select('select * from admins where user_id = '.$user_id.' and approved = 1');

        if ($is_admin)
        {
            $user = Auth::user();
            $is_manager = DB::select('select * from managers where user_id = '.$user_id.' and approved = '.'1');
            $is_tech = DB::select('select * from repairs where user_id = '.$user_id.' and approved = '.'1');
            return view('profile_admin',compact(['user', 'is_manager', 'is_tech']));
        }
        // Shouldn't be reachable
        else return redirect(route('profile.index'));
    }
}
