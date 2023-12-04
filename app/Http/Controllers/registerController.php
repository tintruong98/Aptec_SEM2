<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    public function RegisterPage(){
        return view('register',['name'=>'','err'=>'']);
    }
    public function PostRegister(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');
        $telephone=$request->input('telephone');
        $address=$request->input('address');
        $check=DB::table('userinfor')->where('Email',$email)->first();
        if($check!=null){
            return view('register',['name'=>'','err'=>'Email already Registered']);
        }else{
            DB::table('userinfor')->insert([
                'Email' => $email,
                'Password' => $password,
                'Telephone' => $telephone,
                'Address'=>$address
            ]);
            return redirect('/');
        }

    }
}

