@extends('dashboard')
@section('admin_content')
    <div class="header" style="margin-top: 35px;">
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
            <li><a href="{!! route('admin.pages.list') !!}">Quản lý trang</a></li>
            <li class="active">Chỉnh/sửa</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <script type="text/javascript">
                            function fn_news_special() {
                                var v=$('#hd_news_special').val();
                                if(v==0){ $('#hd_news_special').val(1); }else{ $('#hd_news_special').val(0); }
                            }
                        </script>
                        <form role="form" method="post" action="{!! route('admin.pages.update') !!}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="id" value="{{$all_pages->id}}"/>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#all">Thông tin cơ bản</a></li>
                                <li><a data-toggle="tab" href="#for_seo">SEO</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="all" class="tab-pane fade in active">
                                    <div class="contenttabs">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="sub-title">Tiêu đề <span>*</span></div>
                                            <div>
                                                <input type="text" required name="name" id="name" class="form-control" placeholder="Tiêu đề" value="{{$all_pages->title}}">
                                            </div>
                                            <div class="sub-title">Slug <span>*</span></div>
                                            <div>
                                                <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug" value="{{$all_pages->slug}}">
                                            </div>
                                            <div class="sub-title">Nội dung</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="detailnews" id="ckeditor" rows="3">{!! $all_pages->contents !!}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="sub-title">Trạng thái</div>
                                            <div>
                                                <select name="status" class="form-control">
                                                    <option value="1">Hiển thị</option>
                                                    <option value="0">Lưu nháp</option>
                                                </select>
                                            </div>
                                            <button type="submit" name="add" style="margin-top: 10px;z-index: 9999;" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="for_seo" class="tab-pane fade">
                                    <div class="contenttabs">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="sub-title">Tiêu đề</div>
                                            <div>
                                                <input type="text" name="name_seo" id="name_seo" class="form-control" placeholder="Tiêu đề" value="{{$all_pages->title_seo}}">
                                            </div>
                                            <div class="sub-title">Desception</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="desc_seo" rows="3" placeholder="Desception">{{$all_pages->desc_seo}}</textarea>
                                            </div>
                                            <div class="sub-title">Keywords</div>
                                            <div>
                                                <input type="text" name="keywords_seo" id="keywords_seo" class="form-control" placeholder="Keywords" value="{{$all_pages->keyword_seo}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div style="float: left;position: fixed;width: 75%;height: 50px;text-align: right;bottom: 0px;"></div>-->

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer><p>All right reserved.</p></footer>
    </div>
    <script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>

    <script type="text/javascript" src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'detailnews', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
            filebrowserUploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'
        } );
    </script>
@endsection
