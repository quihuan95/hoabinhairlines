<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class PagesController extends Controller
{
    //
    public function listpages(){
        $all_pages=DB::table('pages')->orderBy('id', 'desc')->get();
        return view("admin.pages.list",compact("all_pages"));
    }
    public function insert(){
        return view("admin.pages.add");
    }
    public function pages_edit($id){
        $all_pages=DB::table('pages')->where('id',$id)->orderBy('id', 'desc')->first();
        return view("admin.pages.edit",compact("all_pages"));
    }
    public function create(Request $request){
        $data=array();
        $data["title"]=$request->name;
        $data["title_seo"]=$request->name_seo;
        $data["desc_seo"]=$request->desc_seo;
        $data["keyword_seo"]=$request->keywords_seo;
        $data["slug"]=$request->slug;
        $data["contents"]=$request->detailnews;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        $data["status"]=$request->status;
        DB::table('pages')->insert($data);
        Session::put('message','Tạo mới thành công');
        return Redirect::to('admin/pages/list');
    }
    public function update(Request $request){
        $data=array();
        $data["title"]=$request->name;
        $data["title_seo"]=$request->name_seo;
        $data["desc_seo"]=$request->desc_seo;
        $data["keyword_seo"]=$request->keywords_seo;
        $data["slug"]=$request->slug;
        $data["contents"]=$request->detailnews;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        $data["status"]=$request->status;
        DB::table('pages')->where('id',$request->id)->update($data);
        Session::put('message','Tạo mới thành công');
        return Redirect::to('admin/pages/list');
    }

    public function delete($id){
        DB::table('pages')->where('id',$id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to(route('admin.pages.list'));
    }
}
