@extends('dashboard')
@section('admin_content')
    <div class="header" style="margin-top: 35px;">
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
            <li><a href="{!! route('admin.tours.list') !!}">Quản lý tour du lịch</a></li>
            <li class="active">Chỉnh/sửa tour</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" method="post" action="{!! route('admin.tours.postupdate') !!}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="created_at" value="{{$all_tours->created_at}}">
                            <input type="hidden" name="id" value="{{$all_tours->id}}">
                            <input type="hidden" name="hd_images" value="{{$all_tours->images}}">
                            <input type="hidden" name="status" value="{{$all_tours->status}}">
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
                                                <input type="text" required name="name" id="name" class="form-control" placeholder="Tiêu đề" value="{{$all_tours->title}}">
                                            </div>
                                            <div class="sub-title">Slug <span>*</span></div>
                                            <div>
                                                <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug" value="{{$all_tours->slug}}">
                                            </div>
                                            <div class="sub-title">Mô tả tóm tắt</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Mô tả" name="desception" rows="3">{{$all_tours->desception}}</textarea>
                                            </div>
                                            <div class="sub-title">Thông tin giới thiệu tour</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Thông tin giới thiệu tour" name="about" id="ckeditor" rows="3">{{$all_tours->about}}</textarea>
                                            </div>
                                            <div class="sub-title">Hành trình</div>
                                            <div>
                                                <textarea class="form-control" placeholder="Hành trình" name="detail" id="ckeditor" rows="3">{{$all_tours->detail}}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="sub-title">Chuyên mục</div>
                                            <div>
                                                <select required name="catalog_tours" class="form-control">
                                                    <option value="0">== Lựa chọn ==</option>
                                                    @foreach($all_catalog_tours as $key=>$val)
                                                        @if($val->id == $all_tours->fk_catalog)
                                                            <option selected="" value="{{$val->id}}">{{$val->title}}</option>
                                                        @else
                                                            <option value="{{$val->id}}">{{$val->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="sub-title">Mã tour</div>
                                            <div>
                                                <input type="text" value="{{$all_tours->tour_code}}" required name="tour_code" class="form-control" placeholder="Mã tour">
                                            </div>
                                            <div class="sub-title">Giá tour ( VNĐ )</div>
                                            <div>
                                                <input type="text" value="{{$all_tours->price}}" required name="price" class="form-control" placeholder="Giá tour">
                                            </div>
                                            <div class="sub-title">Thời gian ( Ví dụ: 3 ngày 2 đêm )</div>
                                            <div>
                                                <input type="text" required value="{{$all_tours->times}}" name="times" class="form-control" placeholder="Thời gian">
                                            </div>
                                            <div class="sub-title">Điểm đi ( Bắt đầu đi từ đâu: Hà Nội, Hồ Chí Minh,... )</div>
                                            <div>
                                                <input type="text" required value="{{$all_tours->poin_from}}" name="poin_from" class="form-control" placeholder="Điểm đi">
                                            </div>
                                            <div class="sub-title">Điểm đến ( Ví dụ: Đà Nẵng, Nhật Bản,... )</div>
                                            <div>
                                                <input type="text" required value="{{$all_tours->poin_to}}" name="poin_to" class="form-control" placeholder="Điểm đến">
                                            </div>
                                            <div class="sub-title">Tên nước ( Ví dụ: Việt Nam, Nhật Bản,... )</div>
                                            <div>
                                                <input type="text" required value="{{$all_tours->country}}" name="country" class="form-control" placeholder="Tên nước">
                                            </div>
                                            <div class="sub-title">Hình ảnh</div>
                                            <div>
                                                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
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
