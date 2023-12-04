<?php

namespace App\Http\Controllers;

use App\StaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class StaffListController extends Controller
{
    public function index(Request $request){
        $role = $request->session()->get('role');
        $user = $request->session()->get('user');
        $staff= StaffList::all();
        return view("admin-stafflist.index", [
            'role'=>$role,
            'name'=>$user,
            'staff'=> $staff
        ]);
    }

    public function addStaff(Request $request){
        $role = $request->session()->get('role');
        $user = $request->session()->get('user');
        return view('admin-stafflist.add', [
            'role' => $role,
            'name' => $user,
        ]);
    }

    public function postAddStaff(Request $request){
        $staffname = $request -> input('StaffName');
        $telephone= intval($request -> input('Telephone'));
        $address= $request -> input('Address');
        $role= $request -> input('Role');

        DB::table('staffinfo')->insert([
            'StaffName' => $staffname,
            'Telephone' => $telephone,
            'Address' => $address,
            'Role' => $role
        ]);

        return redirect()->action('StaffListController@index');
    }

    public function update(Request $request,$staffname){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        $s= StaffList::where('StaffName', $staffname)->first();
        return view('admin-stafflist.update', [
            's' => $s,
            'name'=> $user,
            'role'=> $role
        ]);
    }

    public function postUpdate(Request $request, $staffname){
        //$staffName= $request->input('StaffName');
        $staffTel= intval($request->input('Telephone'));
        $staffAddr= $request-> input('Address');
        //$staffRole= $request-> input('staffRole');

        $staff= StaffList::where('StaffName', $staffname)->first();
        //$staff-> StaffName= $staffName;
        $staff-> Telephone= $staffTel;
        $staff-> Address= $staffAddr;
        //$staff-> Role= $staffRole;
        $staff->save();
        return redirect()->action('StaffListController@index');
    }

    public function delete($staffname){
        StaffList::where('StaffName', $staffname)->delete();
        return redirect()->action('StaffListController@index');
    }
}
