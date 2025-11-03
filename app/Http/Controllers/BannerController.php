<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class BannerController extends Controller
{
    public function banner_manage(){
        $all_banner=DB::table('banners')->get();
        return view('admin.banner.list',compact('all_banner'));
    }

    public function banner_add(){
        return view('admin.banner.add');
    }

    public function banner_edit($banner_id){
        $all_banner=DB::table('banners')->where("id",$banner_id)->first();
        return view('admin.banner.edit',compact('all_banner'));
    }

    public function postupdate(Request $request){
        $data=array();
        $data["name"]=$request->name;
        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/banner',$new_image);
            $data["src"]=$new_image;
        }else{
            $data["src"]=$request->src;
        }
        $data["redirect"]=$request->link;
        $data["orders"]=$request->ordersort;
        $data["status"]=$request->status;
        $data["create_date"]=Carbon::now();
        DB::table('banners')->where('id',$request->id)->update($data);
        Session::put('message','Cập nhật banner thành công');
        return Redirect::to('/admin/banner/list');
    }

    public function postcreate(Request $request){
        $data=array();
        $data["name"]=$request->name;
        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/banner',$new_image);
            $data["src"]=$new_image;
        }else{
            $data["src"]="";
        }
        $data["redirect"]=$request->link;
        $data["orders"]=$request->ordersort;
        $data["status"]=$request->status;
        $data["create_date"]=Carbon::now();
        DB::table('banners')->insert($data);
        Session::put('message','Thêm mới thành công');
        return Redirect::to('/admin/banner/list');
    }

    public function active_atc($banner_id){
        $fBn=DB::table('banners')->where('id',$banner_id)->first();
            if($fBn->status==1){ $status1=0; }else{ $status1=1; }

             DB::table('banners')->where('id',$id)->update(['status' => $status1]);
             Session::put('message','Chỉnh/sửa thành công');
             return Redirect::to('/admin/banner/list');
    }

    public function delete($banner_id){
        DB::table('banners')->where('id',$banner_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('/admin/banner/list');
    }
}
