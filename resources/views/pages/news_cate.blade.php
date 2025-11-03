@extends('layout')
@section('content')

    <div style="background-color: #fff!important;">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs categories-list">
            <div class="title-tour">
                <p>
                    Danh mục
                </p>
            </div>

            <div class="categories-news">
                @foreach($list_cat as $k=>$v)
                    <div><a rel="{{$v->rel}}" data-code="{{$v->id}}" href="{{URL::to('danh-muc-tin/'.$v->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$v->title}}</a>
                    </div>
                @endforeach()
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 p0xs p0mb pr0">

            @foreach($list_cat as $k1=>$v1)
                <div class="box-white news2">
                    <div class="title-tour"><p style="font-size: 20px;">{{$v1->title}}</p>
                        <a href="{{URL::to('danh-muc-tin/'.$v1->slug)}}">
                            Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="content-white tour-category-box col-xs-news">
                        <?php
                        $list_news=App\Models\News::list_news_catalog($v1->id);
                        echo $list_news;
                        ?>
                    </div>
                </div>
            @endforeach()
        </div>
<div style="width: 100%;height:1px;clear:both;">

</div>

    </div>

@endsection
