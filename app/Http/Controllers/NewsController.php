<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\News;


class NewsController extends Controller
{
    //
    /*public function index(){
        $list_cat=DB::table("news_catalog")->orderBy("position","asc")->get();
        $title='Tin tức';
        $canonical=url()->current();
        $og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
        $keywords='';
        $description='Tin tức';

        return view('pages.news_cate',compact('list_cat','title','canonical','og_image','keywords','description'));
    }*/
    public function news_detail($slug){
        $all_news=DB::table('news')->where("slug",$slug)->where("status",'1')->first();

        //$arr=array("bay-tp-ho-chi-minh-cao-hung-dai-loan-chi-tu-250-usd-cua-vietnam-airlines","lien-he","hot-vietnam-airlines-tung-loat-ve-thuong-gia-ha-noi-–-quang-chau-chi-tu-500-usd-khu-hoi","pages/thong-tin-chuyen-khoan","pages/huong-dan-dat-ve","ve-may-bay-gia-reTap","S","ve-vietjetair","co-gi-o-sun-world-ba-na-hills-khien-gioi-tre-han","du-lich-hue-nen-mua-gi-lam-qua","nhanh-tay-so-huu-loat-ve-noi-dia-gia-cuc-tot-cua-vietnam-airlines-thang-7-8-9-thoa-suc-vi-vu-he-nay","Tap","tours","pages/gioi-thieu","ve-may-bay");
        //ve-may-bay
        if(($slug=='chi-phi-du-lich-malaysia-tu-tuc-co-dat-khong-het-bao-nhieu-tien') || ($slug=='ve-bamboo-airwaysTap') || ($slug=='ve-may-bay') || ($slug=='ve-may-bay/') || ($slug=='dat-ve-may-bay-gia-re-di-tay-ban-nha-“xu-so-bo-tot”')){
            //return Redirect::to('https://hoabinhairlines.vn/404.html');
            return view('errors.404');
        }

        if(($slug!='bay-tp-ho-chi-minh-cao-hung-dai-loan-chi-tu-250-usd-cua-vietnam-airlines') && ($slug!='lien-he') && ($slug!='S') && ($slug!='ve-vietjetair') && ($slug!='co-gi-o-sun-world-ba-na-hills-khien-gioi-tre-han') && ($slug!='du-lich-hue-nen-mua-gi-lam-qua') && ($slug!='nhanh-tay-so-huu-loat-ve-noi-dia-gia-cuc-tot-cua-vietnam-airlines-thang-7-8-9-thoa-suc-vi-vu-he-nay') && ($slug!='Tap') && ($slug!='tours') && ($slug!='ve-may-bay-gia-reTap') && ($slug!='hot-vietnam-airlines-tung-loat-ve-thuong-gia-ha-noi-–-quang-chau-chi-tu-500-usd-khu-hoi')){
            if(!empty($all_news)){
                $list_cat=DB::table("news_catalog")->where("id",$all_news->fk_cat)->first();
                $title=$all_news->meta_title==''?$all_news->title:$all_news->meta_title;
                $canonical=url()->current();
                if($canonical=='https://hoabinhairlines.vn/chinh-sach-hoan-ve-online-cho-hanh-khach-bi-anh-huong-boi-dich-covid-19%C2%A0'){
                    return Redirect::to('https://hoabinhairlines.vn/chinh-sach-hoan-ve-online-cho-hanh-khach-bi-anh-huong-boi-dich-covid-19');
                }
                if($canonical=='https://hoabinhairlines.vn/huong-dan-cach-lay-ve-may-bay-dien-tu-chi-tiet%C2%A0'){
                    return Redirect::to('https://hoabinhairlines.vn/huong-dan-cach-lay-ve-may-bay-dien-tu-chi-tiet');
                }
                $og_image='https://hoabinhairlines.vn/public/uploads/news/'.$all_news->picture;
                $keywords=$all_news->meta_keywords;
                $description=$all_news->meta_desc==''?$all_news->title:$all_news->meta_desc;
                return view('pages.news_detail',compact('all_news','title','list_cat','canonical','og_image','keywords','description'));
            }else{
                return view('errors.404');
            }
        }

        /*if($slug!='ve-may-bay'){
            if(!empty($all_news)){
                $list_cat=DB::table("news_catalog")->where("id",$all_news->fk_cat)->first();
                $title=$all_news->meta_title==''?$all_news->title:$all_news->meta_title;
                $canonical=url()->current();
                $og_image='https://hoabinhairlines.vn/public/uploads/news/'.$all_news->picture;
                $keywords=$all_news->meta_keywords;
                $description=$all_news->meta_desc==''?$all_news->title:$all_news->meta_desc;
                return view('pages.news_detail',compact('all_news','title','list_cat','canonical','og_image','keywords','description'));
            }else{
                return Redirect::to('https://hoabinhairlines.vn/ve-may-bay-gia-re');
            }
        }*/
    }

    public function danh_muc_cam_nang_bay(){
        return Redirect::to('https://hoabinhairlines.vn/cam-nang-bay');
    }
    public function news_edit($news_id){
        $all_news=DB::table('news')->where("id",$news_id)->first();
        $danhmuctin=DB::table('news_catalog')->orderBy('position', 'asc')->get();
        return view("admin.news.edit",compact("all_news","danhmuctin"));
    }

    public function CatnewsEdit($id){
        $onecatnews=DB::table('news_catalog')->where('id',$id)->first();
        return view('admin.news.catnewsedit',compact('onecatnews'));
    }

    public function insert_code(){
        for($i=1;$i<=50;$i++){
            /*$orderinfo = DB::table('vouchers')->count();
            if($orderinfo>0){ $orderinfo++; }
            $strOrder='';
            if($orderinfo<=9){
                if($orderinfo==0){
                    $strOrder='HBAVC'.Carbon::now()->year.Carbon::now()->month.Carbon::now()->day.'-001';
                }else{
                    $strOrder='HBAVC'.Carbon::now()->year.Carbon::now()->month.Carbon::now()->day.'-00'.$orderinfo;
                }
            }else if($orderinfo>9 && $orderinfo<=99){
                $strOrder='HBAVC'.Carbon::now()->year.Carbon::now()->month.Carbon::now()->day.'-0'.$orderinfo;
            }else{
                $strOrder='HBAVC'.Carbon::now()->year.Carbon::now()->month.Carbon::now()->day.'-'.$orderinfo;
            }*/
            $strOrder='HBAVC'.Carbon::now()->year.Carbon::now()->month.Carbon::now()->day.rand();
            $data=array();
            $data['voucher_code']=$strOrder;
            $data['voucher_type']='EVOUCHER_250K';
            $data['fullname']='';
            $data['phone']='';
            $data['address']='';
            $data['num']='';
            $data['status']='A';
            $data['created_at']=Carbon::now();
            DB::table('vouchers')->insert($data);
        }
        echo 'Insert thành công';
    }

    public function select_code(){
        $all=DB::table('vouchers')->where('voucher_type','EVOUCHER_250K')->get();
        foreach($all as $k=>$v){
            echo $v->voucher_code.'<br/>';
        }
    }

    public function catnews_update(Request $request){
        $data=array();
        $data['title']=$request->name;
        $data['slug']=$request->slug;
        $data['desception']=$request->desc;
        $data['rel']=$request->rel;
        $data['position']=$request->thutu;
        $data['status']=$request->status;
        $data['created_at']=$request->created_at;
        $data['updated_at']=Carbon::now();
        DB::table('news_catalog')->where('id',$request->id)->update($data);
        Session::put('message','Cập nhật danh mục tin tức thành công');
        return Redirect::to(route('admin.catnews.list'));
    }

    public function uploadSubmit(Request $request)
    {
        // kiểm tra có files sẽ xử lý
        if($request->hasFile('photos')) {
            $allowedfileExtension=['jpg','jpeg','png','pdf'];
            $files = $request->file('photos');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            // kiểm tra tất cả các files xem có đuôi mở rộng đúng không
            foreach($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);

                if(!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                    break;
                }
            }
            // nếu không có file nào vi phạm validate thì tiến hành lưu DB
            if($exe_flg) {
                // duyệt từng ảnh và thực hiện lưu
                foreach ($request->photos as $photo) {
                    //$filename = $photo->store('photos');
                    //$filename = $photo->storeAs('photos', $photo->getClientOriginalName());
                    $get_name_image = $photo->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.'-'.rand(0,99).'.'.$photo->getClientOriginalExtension();
                    $photo->move('public/userfiles/files',$new_image);
                }
                Session::put('message','Upload hình ảnh thành công');
                return Redirect::to(route('uploads.file'));

            } else {
                //echo "Falied to upload. Only accept jpg, png photos.";
                Session::put('message','Falied to upload. Only accept jpg, png photos.');
                return Redirect::to(route('uploads.file'));
            }
        }
    }

    public function listmenu(){
        $all_news=DB::table('news')->orderBy('id', 'desc')->get();
        return view('admin.news.list',compact('all_news'));
    }

    public function insert(){
        $danhmuctin=DB::table('news_catalog')->orderBy('position', 'asc')->get();
        return view('admin.news.add',compact('danhmuctin'));
    }

    public function danh_muc_tin($slug){
        $list_cat=DB::table("news_catalog")->orderBy("position","asc")->get();
        $list_cat_items=DB::table("news_catalog")->where('slug',$slug)->first();

        $canonical=url()->current();
        $og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
        $one_menu=DB::table("menus")->where('slug',$slug)->first();

        $title= $one_menu->title_seo==''?$list_cat_items->title:$one_menu->title_seo;
        $keywords=$one_menu->keyword_seo==''?'':$one_menu->keyword_seo;
        $description=$one_menu->desc_seo==''?$list_cat_items->title:$one_menu->desc_seo;

        return view("pages.danhmuctin",compact('list_cat','list_cat_items','title','canonical','og_image','keywords','description'));
    }
    public function cam_nang_bay(){
        $list_cat=DB::table("news_catalog")->orderBy("position","asc")->get();
        $list_cat_items=DB::table("news_catalog")->where('slug','cam-nang-bay')->first();
        $news=DB::table("news")->where('fk_cat',$list_cat_items->id)->where("status",'1')->orderBy("id","desc")->get();//->paginate(15);
        $canonical=url()->current();
        $og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
        $one_menu=DB::table("menus")->where('slug','cam-nang-bay')->first();

        $title= $one_menu->title_seo==''?$list_cat_items->title:$one_menu->title_seo;
        $keywords=$one_menu->keyword_seo==''?'':$one_menu->keyword_seo;
        $description=$one_menu->desc_seo==''?$list_cat_items->title:$one_menu->desc_seo;

        return view("pages.danhmuctin",compact('list_cat','news','list_cat_items','title','canonical','og_image','keywords','description'));
    }
    
    public function tin_khuyen_mai(){
        $list_cat=DB::table("news_catalog")->orderBy("position","asc")->get();
        $list_cat_items=DB::table("news_catalog")->where('slug','tin-khuyen-mai')->first();
        $news=DB::table("news")->where('fk_cat',$list_cat_items->id)->where("status",'1')->orderBy("id","desc")->paginate(15);

        $canonical=url()->current();
        $og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
        $one_menu=DB::table("menus")->where('slug','tin-khuyen-mai')->first();

        $title= $one_menu->title_seo==''?$list_cat_items->title:$one_menu->title_seo;
        $keywords=$one_menu->keyword_seo==''?'':$one_menu->keyword_seo;
        $description=$one_menu->desc_seo==''?$list_cat_items->title:$one_menu->desc_seo;

        return view("pages.danhmuctin",compact('list_cat','news','list_cat_items','title','canonical','og_image','keywords','description'));
    }


    public function ListcatNews(){
        $all_cats=DB::table('news_catalog')->orderBy('position', 'asc')->get();
        return view('admin.news.list_cat',compact('all_cats'));
    }

    public function create(Request $request){
        $data=array();
        $data["member_id"]=1;
        $data["fk_cat"]=$request->danhmuctin;
        $data["title"]=$request->name;
        $data["slug"]=$request->slug;
        $data["news_desc"]=$request->desc;
        $data["news_content"]=$request->detailnews;

        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/news',$new_image);
            $data['picture'] = $new_image;
        }else{
            $data['picture'] = $request->picture;
        }
        $data["picdesc"]='';
        $data["viewnum"]=1;
        $data["meta_title"]=$request->name_seo;
        $data["meta_desc"]=$request->desc_seo;
        $data["meta_keywords"]=$request->keywords_seo;
        $data["news_special"]=0;
        $data["news_featured"]=0;
        $data["order_sort"]=$request->orders;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('news')->insert($data);
        Session::put('message','Thêm mới tin tức thành công');
        return Redirect::to('admin/news/list');
    }

    public function catnewscreate(Request $request){
        $data=array();
        $data["title"]=$request->name;
        $data["slug"]=$request->slug;
        $data["desception"]=$request->desc;
        $data["rel"]=$request->rel;
        $data["position"]=$request->thutu;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('news_catalog')->insert($data);
        Session::put('message','Tạo mới danh mục tin tức thành công');
        return Redirect::to('admin/catnews/list');
    }

    public function update_news(Request $request){
        $data=array();
        $data["member_id"]=1;
        $data["fk_cat"]=$request->danhmuctin;
        $data["title"]=$request->name;
        $data["slug"]=$request->slug;
        $data["news_desc"]=$request->desc;
        $data["news_content"]=$request->detailnews;

        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/news',$new_image);
            $data['picture'] = $new_image;
        }else{
            $data['picture'] = $request->picture;
        }
        $data["picdesc"]='';
        $data["viewnum"]=1;
        $data["meta_title"]=$request->name_seo;
        $data["meta_desc"]=$request->desc_seo;
        $data["meta_keywords"]=$request->keywords_seo;
        $data["news_special"]=0;
        $data["news_featured"]=0;
        $data["order_sort"]=$request->orders;
        $data["status"]=$request->status;
        $data["created_at"]=Carbon::now();
        $data["updated_at"]=Carbon::now();
        DB::table('news')->where("id",$request->id)->update($data);
        Session::put('message','Cập nhật tin tức thành công');
        return Redirect::to('admin/news/list');
    }

    public function active_atc($id){
            $fTour=DB::table('news')->where('id',$id)->first();
            if($fTour->status==1){ $status1=0; }else{ $status1=1; }

             DB::table('news')->where('id',$id)->update(['status' => $status1]);
             Session::put('message','Chỉnh/sửa thành công');
             return Redirect::to('admin/news/list');
    }

    public function delete($news_id){
        DB::table('news')->where('id',$news_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('admin/news/list');
    }
    public function catnews_delete($catnews_id){
        DB::table('news_catalog')->where('id',$catnews_id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to(route('admin.catnews.list'));
    }
}
