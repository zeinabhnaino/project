<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public  function readItems()
    {
          $data=DB::table("users")->get();
          // dd($data);
         return view('admin')->with('info',$data);
    }
    public function Edit($id,$status)
    {  
        if($status == 0)
        {
            DB::table('users')->where('id',$id)->update(['status'=>1]);
        }
        else
        {
            DB::table('users')->where('id',$id)->update(['status'=>0]);

        }

        return  redirect()->action("AdminController@readItems");
    }
    public function Delete($id)
    {      
        DB::table('users')->where('id',$id)->delete();
        return  redirect()->action("AdminController@readItems");
    }
   
}