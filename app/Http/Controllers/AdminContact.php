<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class AdminContact extends Controller
{
    public function contact_manage(){
        $all_contact=DB::table('tbl_contact')->orderBy('id', 'desc')->get();
        $manager_contact=view('admin.contact.list')->with('all_contact',$all_contact);
        return view('dashboard')->with('admin.contact.list',$manager_contact);
    }
}
