<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class News extends Model
{
    //
    protected $table="news_catalog";


    public static function list_news_catalog($id){
        $re='';
        $list_news=DB::table("news")->where('fk_cat',$id)->orderBy("id","desc")->limit(3)->get();
        if(count($list_news)>0){
            foreach ($list_news as $key => $value) {
             $re.='<div class="media"><a href="https://hoabinhairlines.vn/'.$value->slug.'">
                                        <img class="d-flex mr-3" src="https://hoabinhairlines.vn/public/uploads/news/'.$value->picture.'" alt="'.$value->title.'">
                                    </a>

                                    <div class="media-body">
                                        <a href="https://hoabinhairlines.vn/'.$value->slug.'"> <h3 class="mt-0">'.$value->title.'</h3></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: '.$value->created_at.'</span>
                                        </div>

                                        <div class="short_content">'.$value->news_desc.'</div>
                                    </div>
                                </div>';
            }
        }
    return $re;
    }

    public static function list_news_catalog_2($id){
        $re='';
        $list_news=DB::table("news")->where('fk_cat',$id)->orderBy("id","desc")->paginate(15);
        if(count($list_news)>0){
            foreach ($list_news as $key => $value) {
                if($id=='1'){
                            $re.='<div class="media"><a rel="nofollow" href="https://hoabinhairlines.vn/'.$value->slug.'">
                                        <img class="d-flex mr-3" src="https://hoabinhairlines.vn/public/uploads/news/'.$value->picture.'" alt="'.$value->title.'">
                                    </a>

                                    <div class="media-body">
                                        <a rel="nofollow" href="https://hoabinhairlines.vn/'.$value->slug.'"> <h2 class="mt-0">'.$value->title.'</h2></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: '.$value->created_at.'</span>
                                        </div>

                                        <div class="short_content">'.$value->news_desc.'</div>
                                    </div>
                                </div>';
                }else{
                    $re.='<div class="media"><a href="https://hoabinhairlines.vn/'.$value->slug.'">
                                        <img class="d-flex mr-3" src="https://hoabinhairlines.vn/public/uploads/news/'.$value->picture.'" alt="'.$value->title.'">
                                    </a>

                                    <div class="media-body">
                                        <a rel="dofollow" href="https://hoabinhairlines.vn/'.$value->slug.'"> <h2 class="mt-0">'.$value->title.'</h2></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: '.$value->created_at.'</span>
                                        </div>

                                        <div class="short_content">'.$value->news_desc.'</div>
                                    </div>
                                </div>';
                }
             
            }
        }
        $re.='<div style="width: 100%;height: 35px;clear: both;text-align: center;margin-bottom: 35px;">'.$list_news->links().'</div>';

    return $re;
    }
}
