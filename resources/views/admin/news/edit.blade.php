@extends('dashboard')
@section('admin_content')
    <div class="header" style="margin-top: 35px;">
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
            <li><a href="{!! route('admin.news.list') !!}">Quản lý tin tức</a></li>
            <li class="active">Cập nhật</li>
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
                        <form role="form" method="post" action="{!! route('admin.news.update') !!}" enctype="multipart/form-data">
                            {{ csrf_field() }}
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
                                                <input type="text" required value="{{$all_news->title}}" name="name" id="name" class="form-control" placeholder="Tiêu đề">
                                                <input type="hidden" name="id" value="{{$all_news->id}}" />
                                                <input type="hidden" name="created_at" value="{{$all_news->created_at}}" />
                                                <input type="hidden" name="status" value="{{$all_news->status}}" />
                                                <input type="hidden" name="viewnum" value="{{$all_news->viewnum}}" />
                                                <input type="hidden" name="picture" value="{{$all_news->picture}}" />
                                            </div>
                                            <div class="sub-title">Slug <span>*</span></div>
                                            <div>
                                                <input type="text" required  value="{{$all_news->slug}}" name="slug" id="slug" class="form-control" placeholder="Slug">
                                            </div>
                                            <div class="sub-title">Mô tả tóm tắt</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3">{{$all_news->news_desc}}</textarea>
                                            </div>
                                            <div class="sub-title">Tải hình ảnh lên máy chủ</div>
                                            <iframe src="https://hoabinhairlines.vn/uploads-file" style="width: 100%;height: 60px;" frameborder="0"></iframe>
                                            <div class="sub-title">Nội dung</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="detailnews" id="ckeditor" rows="3">{!! $all_news->news_content !!}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="sub-title">Danh mục</div>
                                            <div>
                                                <select required name="danhmuctin" class="form-control">
                                                    <option value="0">== Lựa chọn ==</option>
                                                    @foreach($danhmuctin as $key=>$val)
                                                        @if($val->id==$all_news->fk_cat)
                                                            <option selected value="{{$val->id}}">{{$val->title}}</option>
                                                        @else
                                                            <option value="{{$val->id}}">{{$val->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="sub-title">Thứ tự</div>
                                            <div>
                                                <input type="number" required name="orders" value="{{$all_news->order_sort}}" class="form-control" placeholder="Thứ tự">
                                            </div>

                                            <div class="sub-title">Hình ảnh</div>
                                            <div>
                                                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <button type="submit" name="edit" style="margin-top: 10px;z-index: 9999;" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="for_seo" class="tab-pane fade">
                                    <div class="contenttabs">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="sub-title">Tiêu đề</div>
                                            <div>
                                                <input type="text" name="name_seo" value="{{$all_news->meta_title}}" id="name_seo" class="form-control" placeholder="Tiêu đề">
                                            </div>
                                            <div class="sub-title">Desception</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="desc_seo" rows="3" placeholder="Desception">{{$all_news->meta_desc}}</textarea>
                                            </div>
                                            <div class="sub-title">Keywords</div>
                                            <div>
                                                <input type="text" value="{{$all_news->meta_keywords}}" name="keywords_seo" id="keywords_seo" class="form-control" placeholder="Keywords">
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
