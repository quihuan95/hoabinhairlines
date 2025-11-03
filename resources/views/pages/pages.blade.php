@extends('layout')
@section('content')
    <div class="wrapper page-has-banner ve-may-bay">
        <!-- Body -->
        <div class="main-content ">
            <div class="content">
                <div class="page-content-artice">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="heading_content_pages">{{$first_pages->title}}</h1>
                        {!! $first_pages->contents !!}
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>

                <!-- Các chặng bay và hãng bay hàng đầu -->

                <!-- Đăng ký nhận tin khuyến mãi -->

            </div>
        </div>
        <!-- End Body -->
@endsection
