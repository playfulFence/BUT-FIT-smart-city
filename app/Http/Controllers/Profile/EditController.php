<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $is_admin = DB::select('select * from admins where user_id = '.$user_id);
        $is_manager = DB::select('select * from managers where user_id = '.$user_id);
        $is_tech = DB::select('select * from repairs where user_id = '.$user_id);

        return view('profile_edit',compact(['user', 'is_admin', 'is_manager', 'is_tech']));
    }
}
