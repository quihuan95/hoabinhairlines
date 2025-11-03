<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class UserAdmin extends Controller
{
    public function user_manage(){
        $all_user=DB::table('tbl_admin')->get();
        $manager_user=view('admin.user.list')->with('all_user',$all_user);//->with('title',$mytitle)
        return view('dashboard')->with('admin.user.list',$manager_user);
    }
    public function save_user(Request $request){
        $data = array();
        $data['role'] = $request->role;
        $data['admin_email'] = $request->txtUsername;
        $data['admin_password'] = md5($request->txtPassword);
        $data['admin_name'] = $request->txtFullname;
        $data['admin_phone'] = $request->txtPhone;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('tbl_admin')->insert($data);
        Session::put('message','Thêm mới thành công');
        return Redirect::to('/admin/user');
    }
    public function delete_user($userid){
        DB::table('tbl_admin')->where('admin_id',$userid)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('/admin/user');
    }
}
