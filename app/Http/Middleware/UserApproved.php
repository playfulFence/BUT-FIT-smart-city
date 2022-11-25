<?php

namespace App\Http\Middleware;


use App\Models\User;
use Closure;
use Illuminate\Http\Request;


class UserApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::where('email',$request->email)->get();

        if($user[0]->approved == 0){
            return redirect(route('authentication.index'))->withErrors([
                'formError' => 'Váš účet ještě nebyl schválen, čekejte prosím',
            ]);
        }
        return $next($request);
    }
}
