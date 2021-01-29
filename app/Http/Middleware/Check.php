<?php

namespace App\Http\Middleware;

use Closure;

use Session;

use App\Admin;
use App\User;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email=$request->input('email');
    $admin = Admin::where(['admin_email' => $email])->first();
    if($admin){
        $password = $admin['admin_password'];

        if($password == $request->input('password')){
            $request->session()->put('admin' , $admin);
            return $next($request);
        }
        else{

            return back()->withErrors([
                'password' => ['The provided password does not match our records.']
            ]);
        }

    }
    else{
        return back();
    }


        // return $next($request);
    }
}
