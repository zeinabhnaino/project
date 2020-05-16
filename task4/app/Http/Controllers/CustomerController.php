<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
class CustomerController extends BaseController
{
    public function AllCustomer()
    {
        $data = DB::table('customers')->get();
        return view('customer')->with('info',$data);
    }
}
