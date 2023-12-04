<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Swift_IdGenerator;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class TestControler extends Controller
{
    public function getTest(){
        return view('test',['name'=>'']);
    }
    public function postFile(Request $request){
    $fileName=$request->file('pic')->getClientOriginalName();
    $path=$request->file('pic')->storeAs('public/product',$fileName);
    // $path = Storage::putFile('avatars', $request->file('pic'));
    // $path = $request->file('pic')->storeAs(
    //     'avatars', $fileName
    // );
    $pic='storage/product/'.$fileName;
    $test= new test;
    $id = IdGenerator::generate(['table' => 'test', 'length' => 6, 'prefix' =>'P']);
    $test->id=$id;
    $test->save();
    return view('test',['name'=>$pic]);
    }

}
