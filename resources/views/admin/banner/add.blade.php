@extends('dashboard')
@section('admin_content')
    <div class="header" style="margin-top: 35px;">
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
            <li><a href="{{URL::to('/admin/banner')}}">Banner</a></li>
            <li class="active">Thêm mới banner hình ảnh</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">            <div class="col-xs-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form role="form" method="post" action="{!! route('admin.banner.postcreate') !!}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="sub-title">Banner name <span>*</span></div>
                            <div>
                                <input type="text" required name="name" class="form-control" placeholder="Banner name">
                            </div>
                            
                            <div class="sub-title">Thứ tự *</div>
                            <div>
                                <input type="number" min="0" required name="ordersort" class="form-control" placeholder="Thứ tự">
                            </div>
                            <div class="sub-title">Hiển thị</div>
                            <div>
                                <select name="status" class="form-control">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <div class="sub-title">Link Redirect *</div>
                            <div>
                                <input type="text" name="link" required class="form-control" placeholder="Link Redirect">
                            </div>
                            <div class="sub-title">Hình ảnh</div>
                            <div>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <button type="submit" name="add_banner" style="margin-top: 10px;" class="btn btn-default">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer><p>All right reserved.</p></footer>
    </div>
@endsection
