<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class AllUsersController extends Controller
{
    public function getAllUsers(Request $data){
        if(Auth::check()){
            $users=DB::table('users')->select('name','surname','occupation','email')->get();
            $data = array("message"=>"API response message", "status"=>37, "data"=>"");
            $data['data']=$users;
            return $data;
        }else{
            $data=array("message"=>"please login","status"=>"failed","data"=>"null");
            return $data;
        }
    }
    public function allUsers(){
        if(Auth::check()){
            $users=DB::table('users')->select('name','surname','occupation','email')->get();
            $data = array("message"=>"API response message", "status"=>37, "data"=>"");
            $data['data']=$users;
            return $data;
        }else{
            $data=array("message"=>"please login","status"=>"failed","data"=>"null");
            return $data;
        }
    }
    public function allUse(){
        return view('test');
    }
}
