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
class RegisterFormController extends BaseController
{
    public function formSubmit(Request $request)
    {
      $fname = $request->input('fname');
      $lname = $request->input('lname');
      $email = $request->input('email');
      $password = $request->input('password');
      DB::table('users')->insert(
          [
              'firstname'=>$fname, 
              'lastname'=>$lname, 
              'email'=>$email, 
              'password'=> Hash::make($password),
              'status'=>0, 
              'role'=>'member'
          ]);
        return response()->json([],200);
    }
    
}