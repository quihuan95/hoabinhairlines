<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

session_start();

class ToursController extends Controller
{
	public function index(){
        //return view('errors.404');
		//abort(404);
        /*$tours_catalog=DB::table('tours_catalog')->where('status','1')->orderBy('id','asc')->get();
        return view("pages.tours",compact('tours_catalog'));*/
        return Redirect::to('https://hoabinhairlines.vn/404.html');
	}

	public function list(){
		$all_tours=DB::table('tours')->orderBy('id','desc')->get();
		return view("admin.tours.list",compact('all_tours'));
	}

	public function customer_list(){
        $all_tours_cus=DB::table('contacts')->where('types','2')->orderBy('id','desc')->get();
        return view("admin.tours.list_cus",compact('all_tours_cus'));
    }

	public function add(){
		$all_catalog_tours=DB::table('tours_catalog')->orderBy('id','desc')->get();
		return view("admin.tours.add",compact('all_catalog_tours'));
	}

    public function tour_detail($slug){
        /*$tours_details=DB::table('tours')->where('slug',$slug)->first();
        $url_page=url()->current();
        $title=$tours_details->title_seo==''?$tours_details->title:$tours_details->title_seo;
        $canonical=url()->current();
        $og_image='public/uploads/tours/'.$tours_details->images;
        $keywords=$tours_details->keywords_seo==''?'':$tours_details->keywords_seo;
        $description=$tours_details->desception_seo==''?$tours_details->title:$tours_details->desception_seo;
        return view("pages.tour_detail",compact('tours_details','url_page','title','canonical','og_image','keywords','description'));*/
        //return view('errors.404');
        return Redirect::to('https://hoabinhairlines.vn/404.html');
    }

    public function edit($id){
        $all_tours=DB::table('tours')->where('id',$id)->orderBy('id','desc')->first();
        $all_catalog_tours=DB::table('tours_catalog')->orderBy('id','desc')->get();
        return view("admin.tours.edit",compact('all_tours','all_catalog_tours'));
    }

	public function catalog_list(){
		$all_catalog_tours = DB::table('tours_catalog')->orderBy('id','desc')->get();
		return view("admin.tours.catalog_list",compact('all_catalog_tours'));
	}

	public function catalog_postcreate(Request $request){
		$data=array();
        $data["title"]=$request->name;
        $data["slug"]=$request->slug;
        $data["desception"]=$request->desc;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('tours_catalog')->insert($data);
        Session::put('message','Tạo mới danh mục tour thành công');
        return Redirect::to('admin/catalog/tours/list');
	}

    public function postcreate(Request $request){
		$data=array();
        $data["title"]=$request->name;
        $data["slug"]=$request->slug;
		$data["desception"]=$request->desception;
        $data["fk_catalog"]=$request->catalog_tours;
        $data["tour_code"]=$request->tour_code;
        $data["price"]=$request->price;
        $data["times"]=$request->times;
        $data["poin_from"]=$request->poin_from;
        $data["poin_to"]=$request->poin_to;
        $data["country"]=$request->country;
        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/tours',$new_image);
            $data['images'] = $new_image;
        }else{
            $data['images'] = '';
        }

        $data["title_seo"]=$request->name_seo;
        $data["keywords_seo"]=$request->keywords_seo;
        $data["desception_seo"]=$request->desc_seo;
        $data["about"]=$request->about;
        $data["detail"]=$request->detail;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('tours')->insert($data);
        Session::put('message','Tạo mới tour thành công');
        return Redirect::to('admin/tours/list');
	}

    public function postupdate(Request $request){
        $data=array();
        $data["title"]=$request->name;
        $data["slug"]=$request->slug;
        $data["desception"]=$request->desception;
        $data["fk_catalog"]=$request->catalog_tours;
        $data["tour_code"]=$request->tour_code;
        $data["price"]=$request->price;
        $data["times"]=$request->times;
        $data["poin_from"]=$request->poin_from;
        $data["poin_to"]=$request->poin_to;
        $data["country"]=$request->country;
        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/tours',$new_image);
            $data['images'] = $new_image;
        }else{
            $data['images'] = $request->hd_images;
        }

        $data["title_seo"]=$request->name_seo;
        $data["keywords_seo"]=$request->keywords_seo;
        $data["desception_seo"]=$request->desc_seo;
        $data["about"]=$request->about;
        $data["detail"]=$request->detail;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('tours')->where('id',$request->id)->update($data);
        Session::put('message','Chỉnh/sửa tour thành công');
        return Redirect::to('admin/tours/list');
    }

    public function active_atc($id){
        $fTour=DB::table('tours')->where('id',$id)->first();
        if($fTour->status==1){ $status1=0; }else{ $status1=1; }

         DB::table('tours')->where('id',$id)->update(['status' => $status1]);
         Session::put('message','Chỉnh/sửa trạng thái tour thành công');
         return Redirect::to('admin/tours/list');
    }

	public function catalog_create(){
		return view("admin.tours.catalog_add");
	}

    public function delete($id){
        DB::table('tours')->where('id',$id)->delete();
        Session::put('message','Xoá tour thành công');
         return Redirect::to('admin/tours/list');
    }

}




