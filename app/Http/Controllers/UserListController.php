<?php

namespace App\Http\Controllers;

use App\UserList;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index(Request $request){
        $role = $request->session()->get('role');
        $user = $request->session()->get('user');
        $userlist= UserList::all();
        return view('admin-userlist.index',[
            'role'=>$role,
            'name'=>$user,
            'userList'=> $userlist
        ]);
    }

    public function addUser(Request $request){
        $role = $request->session()->get('role');
        $user = $request->session()->get('user');
        return view('admin-userlist.add', [
            'role' => $role,
            'name' => $user
        ]);
    }

    public function postAddUser(Request $request){
        $userEmail=$request-> input('userEmail');
        $userName= $request-> input('userName');
        $userTel= $request-> input('userTel');
        $userAddr= $request-> input('userAddr');
        $userRole= $request-> input('userRole');
        $userPassword= $request-> input('userPassword');

        Userlist::insert([
            'Email' => $userEmail,
            'Name' => $userName,
            'Address'=> $userAddr,
            'Telephone' => $userTel,
            'Role' => $userRole,
            'Password' => $userPassword
        ]);

        return redirect()->action('UserListController@index');
    }

    public function updateUser(Request $request, $email){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        $u= UserList::where('Email', $email)->first();
        return view('admin-userlist.update', [
            'u' => $u,
            'name'=> $user,
            'role'=> $role
        ]);
    }

    public function postUpdateUser(Request $request, $email){
        $userTel= intval($request->input('userTel'));
        $userAddr= $request-> input('userAddr');

        $userList= UserList::where('Email', $email)->first();

        $userList-> Telephone= $userTel;
        $userList-> Address= $userAddr;

        $userList->save();
        return redirect()->action('UserListController@index');
    }

    public function delete($email){
        UserList::where('Email', $email)->delete();
        return redirect()->action('UserListController@index');
    }
}
