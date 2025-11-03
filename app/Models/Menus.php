<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class Menus extends Model
{
    //
    protected $table="menus";

    public static function render_menu(){
        $menu_top='';
        $menus=DB::table('menus')->select('id','parent_id','title','slug','redirect','position','icon','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id','1')->orderBy('level','asc')->get();
        if(count($menus)>0){
            foreach ($menus as $k=>$v){
                $sub_menu='';
                $menus_c2=DB::table('menus')->select('id','parent_id','title','slug','icon','redirect','position','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id',$v->id)->orderBy('level','asc')->get();
                if(count($menus_c2)>0){
                    $sub_menu.='<div id="sub_menu_'.$v->id.'" class="sub-menu"><ul>';
                    foreach ($menus_c2 as $ck=>$cv){
                        $rel2=$cv->rel==1?' rel="dofollow" ':' rel="nofollow" ';
                        if($cv->redirect!=''){ $str_link=$cv->redirect; }else{ $str_link='https://hoabinhairlines.vn/ve-may-bay/'.$cv->slug; }
                        if($cv->id==45 || $cv->id==46 || $cv->id==47){
                            $sub_menu.='<li style="width: 100%;height: 0px;overflow: hidden;" id="mntop_'.$cv->id.'"><a '.$rel2.' href="'.$str_link.'">'.$cv->title.'</a></li>';
                        }else{
                            $sub_menu.='<li id="mntop_'.$cv->id.'"><a '.$rel2.' href="'.$str_link.'">'.$cv->title.'</a></li>';
                        }
                    }
                    $sub_menu.='</ul></div>';
                }

                if($v->redirect!=''){ $str_link_0=$v->redirect; }else{ $str_link_0='https://hoabinhairlines.vn/'.$v->slug; }
                $rel=$v->rel==1?' rel="dofollow" ':' rel="nofollow" ';
                if($sub_menu!=''){
                    $menu_top.='<li id="mntop_'.$v->id.'" class="hidden-xs"><a '.$rel.' href="'.$str_link_0.'">'.$v->title.'</a>'.$sub_menu.'</li>';
                }else{
                    $menu_top.='<li id="mntop_'.$v->id.'" class="hidden-xs"><a '.$rel.' href="'.$str_link_0.'">'.$v->title.'</a></li>';
                }
            }
        }

        return $menu_top;
    }

    public static function render_menu_mobile(){
        $menu_top='';
        $menus=DB::table('menus')->select('id','parent_id','title','slug','redirect','icon','position','level','rel','status','created_at','updated_at')->where('status','1')->where('id','!=','2')->where('parent_id','1')->orderBy('level','asc')->get();
        if(count($menus)>0){
            foreach ($menus as $k=>$v){
                $sub_menu='';
                $menus_c2=DB::table('menus')->select('id','parent_id','title','slug','redirect','icon','position','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id',$v->id)->where('id','!=','2')->orderBy('level','asc')->get();
                if(count($menus_c2)>0){
                    $sub_menu.='<div id="menu1" class="collapse sub-menu"><ul>';
                    foreach ($menus_c2 as $ck=>$cv){
                        $rel2=$cv->rel==1?' rel="dofollow" ':' rel="nofollow" ';
                        $icon2=$cv->icon!=''?'<i class="'.$cv->icon.'" aria-hidden="true"></i>':'';
                        if($cv->redirect!=''){ $str_link=$cv->redirect; }else{ $str_link='https://hoabinhairlines.vn/ve-may-bay/'.$cv->slug; }
                        $sub_menu.='<li><a '.$rel2.' href="'.$str_link.'">'.$icon2.$cv->title.'</a></li>';
                    }
                    $sub_menu.='</ul></div>';
                }

                if($v->redirect!=''){ $str_link_0=$v->redirect; }else{ $str_link_0='https://hoabinhairlines.vn/'.$v->slug; }
                $rel=$v->rel==1?' rel="dofollow" ':' rel="nofollow" ';
                $icon=$v->icon!=''?'<i class="'.$v->icon.'" aria-hidden="true"></i>':'';
                if($sub_menu!=''){
                    $menu_top.='<li><a '.$rel.' href="'.$str_link_0.'">'.$icon.' '.$v->title.'</a></li>';

                }else{
                    $menu_top.='<li><a '.$rel.' href="'.$str_link_0.'">'.$icon.' '.$v->title.'</a></li>';
                }
            }
        }

        return $menu_top;   
    }

    public static function render_contries(){
        $str='';
        $all_countries=DB::table('countries')->where('pid',0)->orderBy('sort','asc')->get();
        foreach($all_countries as $kc=>$vc){
            $str.='<h3>'.$vc->title.'</h3>';
            $all_countries_lv2=DB::table('countries')->where('pid',$vc->id)->orderBy('sort','asc')->get();
            if(count($all_countries_lv2)>0){
                $str.='<ul>';
                foreach($all_countries_lv2 as $kc2=>$vc2){
                    $str.='<li class="item-diem-di" data-code="'.$vc2->code.'">'.$vc2->title.'</li>';
                }
                $str.='</ul>';
            }
        }
        return $str;
    }
    
    public static function render_sitemap(){
        $strSitemap='';
        $d10=Carbon::parse(Carbon::now())->format('Y-m-d\TH:i:sP');
        
        $news=DB::table('news')->where('fk_cat','!=','1')->where('status','1')->get();
        if(count($news)>0){
            foreach ($news as $k4=>$v4){
                $d14=Carbon::parse(Carbon::now())->format('Y-m-d\TH:i:sP');
                $strSitemap.='<url>';
                $strSitemap.='<loc>https://hoabinhairlines.vn/'.$v4->slug.'</loc>';
                $strSitemap.='<lastmod>'.$d14.'</lastmod>';
                $strSitemap.='<changefreq>daily</changefreq>';
                $strSitemap.='<priority>0.9</priority>';
                $strSitemap.='</url>';
            }
        }
        return $strSitemap;
    }
}
