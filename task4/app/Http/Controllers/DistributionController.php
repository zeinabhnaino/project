<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class DistributionController extends Controller
{
    //
    public function Add()
    {
        $users= DB::table('users')->get();
        $groups=DB::table('groups')->get();
        $data = ['users'=> $users,'groups'=> $groups];
        return view('distribution')->with('data', $data);
    }

    public function submit($userid, $groupid)
    {
        DB::table('users_groups')->insert([
            'user_id'=>$userid,
            'group_id'=>$groupid
        ]);
        return redirect()->action("DistributionController@Add");
    }
}
