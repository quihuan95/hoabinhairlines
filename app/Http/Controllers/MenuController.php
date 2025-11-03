<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MenuController extends Controller
{
    //
    public function listmenu(){
        $all_menus=DB::table('menus')->orderBy('level', 'asc')->get();
        return view("admin.menu.list",compact("all_menus"));
    }
    function listcountries(){
        $all_countries=DB::table('countries')->orderBy('sort', 'asc')->get();
        return view("admin.menu.countries_list",compact("all_countries"));
    }

    public function insert(){
        $all_menus=DB::table('menus')->orderBy('level', 'asc')->get();
        return view("admin.menu.add",compact("all_menus"));
    }
    public function countries_add(){
        $all_countries=DB::table('countries')->orderBy('sort', 'asc')->get();
        return view("admin.menu.countries_add",compact("all_countries"));
    }

    public function edit($id,$parent_id){
        $all_menus=DB::table('menus')->where("id",$id)->first();
        $all_menus_select=DB::table('menus')->orderBy("level",'asc')->get();
        return view("admin.menu.edit",compact("all_menus","all_menus_select"));
    }

    public function update(Request $request){
        $data=array();        
        $data["parent_id"]=$request->category;
        $data["title"]=$request->name;
        $data["slug"]=trim($request->slug);
        $data["redirect"]=$request->url_redirect;
        $data["position"]=$request->orders;
        $data["level"]=$request->orders;
        $data["desception"]=$request->desc;
        $data["scheme"]=$request->scheme;
        $data["icon"]=$request->icon;
        $data["rel"]=$request->rel;
        $data["title_seo"]=$request->txtTitleSEO;
        $data["desc_seo"]=$request->txtDescSEO;
        $data["keyword_seo"]=$request->txtKeywordSEO;
        $data["status"]=$request->status;
        $data["created_at"]=$request->created_at;
        $data["updated_at"]=Carbon::now();

        DB::table('menus')->where('id',$request->id)->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('admin/menu/list');
    }

    public function create(Request $request){
        $data=array();
        $data["parent_id"]=$request->category;
        $data["title"]=$request->name;
        $data["slug"]=trim($request->slug);
        $data["redirect"]=$request->url_redirect;
        $data["position"]=$request->orders;
        $data["level"]=$request->orders;
        $data["desception"]=$request->desc;
        $data["scheme"]=$request->scheme;
        $data["icon"]=$request->icon;
        $data["rel"]=$request->rel;
        $data["title_seo"]=$request->txtTitleSEO;
        $data["desc_seo"]=$request->txtDescSEO;
        $data["keyword_seo"]=$request->txtKeywordSEO;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('menus')->insert($data);
        Session::put('message','Tạo mới thành công');
        return Redirect::to('admin/menu/add');
    }
    public function countries_create(Request $request){
        $data=array();
        $data["code"]=$request->code;
        $data["pid"]=$request->category;
        $data["title"]=$request->tieude;
        $data["des1"]=$request->desc;
        $data["sort"]=$request->orders==''?0:$request->orders;
        $data["status"]=1;
        DB::table('countries')->insert($data);
        Session::put('message','Tạo mới thành công');
        return Redirect::to(route('admin.countries.add'));
    }

    public function delete($id){
        DB::table('menus')->where('parent_id',$id)->delete();
        DB::table('menus')->where('id',$id)->delete();
        Session::put('message','Xoá menu thành công');
        return Redirect::to('admin/menu/list');
    }
}
