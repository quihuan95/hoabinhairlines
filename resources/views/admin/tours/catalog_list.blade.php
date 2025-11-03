@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ DANH MỤC TOURS</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <div class="col-md-7">
                            <p style="margin: 4px 0 0 0;">&nbsp;</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">Tiêu đề</th>
                                    <th style="width: 25%;text-align: center;">Tùy chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_catalog_tours as $k=>$v)
                                    <tr>
                                        <td>{!! $v->title !!}</td>
                                        <td style="text-align: center;"><a href=""><i class="fa fa-edit"></i> Sửa</a> &nbsp; <a data-toggle="modal" data-action="Xóa" data-confirm="Bạn có chắc chắn muốn xóa bài viết này không?" data-title="Xóa bài viết" data-link="/news/delete/4496/31815" data-target="#abahaModal" href="#"><i class="fa fa-trash"></i> Xóa</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="col-md-5">
                            <form role="form" method="post" action="{!! route('admin.catalog_tours.postcreate') !!}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="sub-title">Tiêu đề <span>*</span></div>
                                <div>
                                    <input type="text" required="" name="name" id="name" class="form-control" placeholder="Tiêu đề">
                                </div>
                                <div class="sub-title">Slug <span>*</span></div>
                                <div>
                                    <input type="text" required="" name="slug" id="slug" class="form-control" placeholder="Slug">
                                </div>

                                <table style="margin: 0px;padding: 0px;width: 100%;">
                                    <tr>
                                        <td style="text-align: left;vertical-align: top;">
                                            <div class="sub-title" style="width: 100%;text-align: left;">Trạng thái</div>
                                            <div>
                                                <select name="status" class="form-control" style="width: 120px;">
                                                    <option value="1">Hiển thị</option>
                                                    <option value="0">Ẩn</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td style="text-align: right;vertical-align: top;">
                                            <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                </table>

                                <div class="sub-title">Mô tả</div>
                                <div>
                                    <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3"></textarea>
                                </div>
                            <div style="text-align: right;">
                                <button type="submit" name="add_catalog_tour" style="margin-top: 10px;" class="btn btn-primary">Thêm mới</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>
@endsection
