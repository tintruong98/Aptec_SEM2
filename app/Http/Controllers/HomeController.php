<?php

namespace App\Http\Controllers;

use App\ProductList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function GetHomePage(Request $request){
        $role = $request->session()->get('role');
        $user = $request->session()->get('user');
        $productlist = ProductList::all();
        return view('HOME',['role'=>$role,'name'=>$user,'productlist'=>$productlist]);
    }
}
