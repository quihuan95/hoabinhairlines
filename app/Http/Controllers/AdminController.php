<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');//->with(['title'=>"Event Crew CMS"]);
    }
    
    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function email_list(){
        $list=DB::table("email_promotion")->orderBy("id","desc")->get();
        return view('admin.emails.list',compact('list'));
    }
    
    public function payment_list(){
        $list=DB::table("payments")->orderBy("id","desc")->get();
        return view('admin.payments.list',compact('list'));
    }

    /**
     * Đăng ký từ popup khuyến mãi HBA (bảng contacts, types = 4).
     */
    public function tour_promo_popup_list()
    {
        $records = DB::table('contacts')->where('types', '4')->orderBy('id', 'desc')->get();
        return view('admin.tour_promo_popup.list', compact('records'));
    }

    public function tour_promo_popup_delete($id)
    {
        $deleted = DB::table('contacts')->where('types', '4')->where('id', $id)->delete();
        if ($deleted) {
            Session::put('message', 'Đã xóa bản đăng ký.');
        } else {
            Session::put('message', 'Không tìm thấy bản ghi hoặc không thể xóa.');
        }
        return Redirect::route('admin.tour_promo_popup.list');
    }

    public function dashboard(Request $request){
        $admin_email=$request->username;
        $admin_password=md5($request->password);

        $result=DB::table('admins')->where('email',$admin_email)->where('password',$admin_password)->first();
        if($result){
         Session::put('admin_name',$result->name);
         Session::put('admin_id',$result->id);
         return Redirect::to('/admin/dashboard');
        }else{
            Session::put('message','Tài khoản không đúng. Vui lòng thử lại');
            return Redirect::to('/admin/login');
        }
    }

    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin/login');
    }
}
