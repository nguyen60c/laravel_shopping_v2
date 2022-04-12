<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /*
     * Logout account user
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform(){
        Session::flush();

        Auth::logout();

        return redirect("login");
    }
}
