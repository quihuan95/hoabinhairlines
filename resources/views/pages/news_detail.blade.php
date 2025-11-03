@extends('layout')
@section('content')
    <style type="text/css">
    @media only screen and (min-width:320px) and (max-width:736px){
      .new-detail-title{ padding: 0 10px; }
      .txt-nhat{ padding: 0 10px; }
    }
    </style>
    <div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0xs p0mb pr0">
    <ul class="breadcrumb">
       <li itemprop="itemListElement">
          <meta itemprop="position" content="1">
          <a href="https://hoabinhairlines.vn/" itemprop="item" title="Trang chủ">
             Trang chủ 
             <meta itemprop="name" content="Trang chủ">
          </a>
       </li>
       <li itemprop="itemListElement">
          <meta itemprop="position" content="2">
          <a href="https://hoabinhairlines.vn/{{ $list_cat->slug }}" rel="dofollow" itemprop="item" title="{{ $list_cat->title }}" class="dofollow">
             {{ $list_cat->title }}
             <meta itemprop="name" content="{{ $list_cat->title }}">
          </a>
       </li>
       <li class="active"><a href="https://hoabinhairlines.vn/{{ $all_news->slug }}" rel="dofollow" class="dofollow">{{ $all_news->title }}</a></li>
    </ul>
    <h1 class="new-detail-title">{{$all_news->title}}</h1>
    <div class="txt-nhat italic">Đăng ngày : <span>{{ $all_news->created_at }}</span></div>
    <div class="news-description-detail">
        <div class="contentnewsdt">
                <div id="toctoc"></div>
                {!! $all_news->news_content !!}
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>
        <div style="width: 100%;height:1px;clear:both;">

        </div>
    </div>


@endsection
