<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Tours extends Model
{
	protected $table="tours";

	public static function list_tours($id){
        $re='';
        $list_tours=DB::table("tours")->where('fk_catalog',$id)->orderBy("id","desc")->limit(3)->get();
        if(count($list_tours)>0){
            foreach ($list_tours as $key => $value) {
             $re.='<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 p8-row">
                                                <div class="card">
                                                   <a rel="nofollow" href="/tour/'.$value->slug.'"> 
                                                  <img class="card-img-top" src="public/uploads/tours/'.$value->images.'" alt="" onerror="this.src=">
                                                    </a>
                                                  <div class="card-body">
                                                    <a rel="nofollow"  href="/tour/'.$value->slug.'"> 
                                                        <h3 class="card-title">'.$value->title.'</h3>
                                                    </a>
                                                    <p class="card-text">'.$value->desception.'</p>
                                                  </div>
                                                  <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i> 
                                                        '.$value->times.'</li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-plane go" aria-hidden="true"></i>  
                                                        '.$value->poin_from.'</li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-plane back" aria-hidden="true"></i>  
                                                        '.$value->poin_to.'</li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-usd" aria-hidden="true" style="margin-left: 2px;"></i> 
                                                        <span class="price">'.number_format($value->price).'đ</span>
                                                    </li>
                                                  </ul>
                                                </div>
                                        </div>';
            }
        }
    return $re;
    }
}