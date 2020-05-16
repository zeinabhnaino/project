<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    public function AllUser()
    {
        $data=DB::table("users")->get();
        //dd($data);
        return view('group')->with('info',$data);
    }
    public function AddGroup(Request $request)
   {
        $group = $request->input('group');
        Db::table('groups')->insert(
        [
           'name'=>$group, 
       ]); 

}
}