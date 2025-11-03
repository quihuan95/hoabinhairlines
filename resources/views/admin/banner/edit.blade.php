@extends('dashboard')
@section('admin_content')
    <div class="header" style="margin-top: 35px;">
        <ol class="breadcrumb">
            <li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
            <li><a href="{!! route('admin.banner.list') !!}">Banner</a></li>
            <li class="active">Cập nhật banner hình ảnh</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form role="form" method="post" action="{!! route('admin.banner.postupdate') !!}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$all_banner->id}}"/>
                            <input type="hidden" name="create_date" value="{{$all_banner->create_date}}"/>
                            <input type="hidden" name="status" value="{{$all_banner->status}}"/>
                            <input type="hidden" name="src" value="{{$all_banner->src}}"/>
                            <div class="sub-title">Banner name</div>
                            <div>
                                <input type="text" name="name" value="{{$all_banner->name}}" class="form-control" placeholder="Banner name">
                            </div>
                            <div class="sub-title">Thứ tự *</div>
                            <div>
                                <input type="number" required name="ordersort" class="form-control" value="{{$all_banner->orders}}" placeholder="Thứ tự">
                            </div>
                            <div class="sub-title">Link Redirect</div>
                            <div>
                                <input type="text" name="link" value="{{$all_banner->redirect}}" required class="form-control" placeholder="Link Redirect">
                            </div>
                            <div class="sub-title">Hình ảnh</div>
                            <div>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <button type="submit" name="edit_banner" style="margin-top: 10px;" class="btn btn-default">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer><p>All right reserved.</p></footer>
    </div>
@endsection
