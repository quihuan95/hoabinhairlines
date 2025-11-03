@extends('layout')
@section('content')
<?php
if(isset($_GET["page"])){
    header('Location: https://hoabinhairlines.vn/cam-nang-bay');
    die();
}
?>
    <div style="background-color: #fff!important;">
<!--<div class="col-lg-3 col-md-3 hidden-sm hidden-xs categories-list">
                    <div class="title-tour">
                        <h2>
                            Danh mục
                        </h2>
                    </div>

                    <div class="categories-news">
                        @foreach($list_cat as $k=>$v)
                        <div><a rel="{{$v->rel}}" data-code="{{$v->id}}" href="{{URL::to('danh-muc-tin/'.$v->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$v->title}}</a>
                        </div>
                        @endforeach()
                    </div>
                </div>-->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0xs p0mb pr0">


<div class="box-white news2">
<div class="title-tour"><h1>{{$list_cat_items->title}}</h1></div>

<div class="content-white tour-category-box col-xs-news">
    @if($list_cat_items->slug=='cam-nang-bay')
        @foreach($news as $k1=>$value)
            <div class="media"><a href="https://hoabinhairlines.vn/{{ $value->slug }}">
                                        <img class="d-flex mr-3" src="https://hoabinhairlines.vn/public/uploads/news/{{ $value->picture }}" alt="{{ $value->title }}">
                                    </a>

                                    <div class="media-body">
                                        <a rel="dofollow" href="https://hoabinhairlines.vn/{{ $value->slug }}"> <h2 class="mt-0">{{ $value->title }}</h2></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: {{ $value->created_at }}</span>
                                        </div>

                                        <div class="short_content">{{ $value->news_desc }}</div>
                                    </div>
                                </div>
        @endforeach
    @else
        @foreach($news as $k1=>$value)
            <div class="media"><a rel="dofollow" href="https://hoabinhairlines.vn/{{ $value->slug }}">
                                        <img class="d-flex mr-3" src="https://hoabinhairlines.vn/public/uploads/news/{{ $value->picture }}" alt="{{ $value->title }}">
                                    </a>

                                    <div class="media-body">
                                        <a rel="dofollow" href="https://hoabinhairlines.vn/{{$value->slug}}"> <h2 class="mt-0">{{ $value->title }}</h2></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: {{ $value->created_at }}</span>
                                        </div>

                                        <div class="short_content">{{ $value->news_desc }}</div>
                                    </div>
                                </div>
        @endforeach
    @endif


</div>
</div>

                </div>
        <div style="width: 100%;height:1px;clear:both;">

        </div>
    </div>
    @if($list_cat_items->slug=='cam-nang-bay')

    @endif
@endsection
