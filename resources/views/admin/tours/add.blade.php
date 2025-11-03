@extends('dashboard')
@section('admin_content')
    <div class="header" style="margin-top: 35px;">
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
            <li><a href="{!! route('admin.news.list') !!}">Quản lý tour du lịch</a></li>
            <li class="active">Thêm mới</li>
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
                        <form role="form" method="post" action="{!! route('admin.tours.postcreate') !!}" enctype="multipart/form-data">
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
                                                <input type="text" required name="name" id="name" class="form-control" placeholder="Tiêu đề">
                                            </div>
                                            <div class="sub-title">Slug <span>*</span></div>
                                            <div>
                                                <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug">
                                            </div>
                                            <div class="sub-title">Mô tả tóm tắt</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="desception" rows="3"></textarea>
                                            </div>
                                            <div class="sub-title">Thông tin giới thiệu tour</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Thông tin giới thiệu tour" name="about" id="ckeditor" rows="3"></textarea>
                                            </div>
                                            <div class="sub-title">Hành trình</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Hành trình" name="detail" id="ckeditor" rows="3"></textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="sub-title">Chuyên mục</div>
                                            <div>
                                                <select required name="catalog_tours" class="form-control">
                                                    <option value="0">== Lựa chọn ==</option>
                                                    @foreach($all_catalog_tours as $key=>$val)
                                                        <option value="{{$val->id}}">{{$val->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="sub-title">Mã tour</div>
                                            <div>
                                                <input type="text" required name="tour_code" class="form-control" placeholder="Mã tour">
                                            </div>
                                            <div class="sub-title">Giá tour ( VNĐ )</div>
                                            <div>
                                                <input type="text" required name="price" class="form-control" placeholder="Giá tour">
                                            </div>
                                            <div class="sub-title">Thời gian ( Ví dụ: 3 ngày 2 đêm )</div>
                                            <div>
                                                <input type="text" required name="times" class="form-control" placeholder="Thời gian">
                                            </div>
                                            <div class="sub-title">Điểm đi ( Bắt đầu đi từ đâu: Hà Nội, Hồ Chí Minh,... )</div>
                                            <div>
                                                <input type="text" required name="poin_from" class="form-control" placeholder="Điểm đi">
                                            </div>
                                            <div class="sub-title">Điểm đến ( Ví dụ: Đà Nẵng, Nhật Bản,... )</div>
                                            <div>
                                                <input type="text" required name="poin_to" class="form-control" placeholder="Điểm đến">
                                            </div>
                                            <div class="sub-title">Tên nước ( Ví dụ: Việt Nam, Nhật Bản,... )</div>
                                            <div>
                                                <input type="text" required name="country" class="form-control" placeholder="Tên nước">
                                            </div>
                                            <div class="sub-title">Hiển thị</div>
                                            <div>
                                                <select name="status" class="form-control">
                                                    <option value="1">Hiển thị</option>
                                                    <option value="0">Ẩn</option>
                                                </select>
                                            </div>
                                            <div class="sub-title">Hình ảnh</div>
                                            <div>
                                                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <button type="submit" name="add" style="margin-top: 10px;z-index: 9999;" class="btn btn-primary">Thêm mới</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="for_seo" class="tab-pane fade">
                                    <div class="contenttabs">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="sub-title">Tiêu đề</div>
                                            <div>
                                                <input type="text" name="name_seo" id="name_seo" class="form-control" placeholder="Tiêu đề">
                                            </div>
                                            <div class="sub-title">Desception</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="desc_seo" rows="3" placeholder="Desception"></textarea>
                                            </div>
                                            <div class="sub-title">Keywords</div>
                                            <div>
                                                <input type="text" name="keywords_seo" id="keywords_seo" class="form-control" placeholder="Keywords">
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
        CKEDITOR.replace( 'about', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
            filebrowserUploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'
        } );
        CKEDITOR.replace( 'detail', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
            filebrowserUploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'
        } );
    </script>
@endsection
