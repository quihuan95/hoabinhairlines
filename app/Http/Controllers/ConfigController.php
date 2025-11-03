<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class ConfigController extends Controller
{
    //
    public function config(){
        $config=DB::table('config')->where('id','1')->first();
        return view('admin.config',compact('config'));
    }

    public function postupdate(Request $request){
        $data=array();
        $data["title"]=$request->meta_title;
        $data["keywords"]=$request->meta_keyword;
        $data["description"]=$request->meta_desc;
        $data["face_app_id"]="sanvemaybaygiare.hoabinhtourist";
        $data["author"]="HoaBinh Airlines";
        $data["publisher"]="HoaBinh Airlines";
        $data["page_id"]="sanvemaybaygiare.hoabinhtourist";
        $data["email"]="info@hoabinhtourist.com";
        $data["phone_number"]="0913311911";
        $data["canonical"]="https://hoabinhairlines.vn/";
        $data["created_at"]=Carbon::now();
        $data["update_at"]=Carbon::now();
        $data["status"]='A';
        DB::table('config')->where('id',$request->id)->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to(route('admin.config.list'));
    }
}
