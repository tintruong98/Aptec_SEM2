<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function GetLogout(Request $request){
        $request->session()->flush();
        return redirect()->action('HomeController@GetHomePage');
    }
}
