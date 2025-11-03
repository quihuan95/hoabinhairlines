@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ DANH MỤC TIN TỨC</p>
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
                                    <th style="text-align: center;width: 10%;">STT</th>
                                    <th style="width: 25%;text-align: center;">Tùy chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_cats as $k=>$v)
                                    <tr>
                                        <td>{!! $v->title !!}</td>
                                        <td style="text-align: center;">{!! $v->position !!}</td>
                                        <td style="text-align: center;"><a href="{!! route('admin.catnews.edit',$v->id) !!}"><i class="fa fa-edit"></i> Sửa</a> &nbsp; <a  onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.catnews.delete',array($v->id)) !!}"><i class="fa fa-trash"></i> Xóa</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="col-md-5" style="background-color: antiquewhite;border-radius: 5px;padding-bottom: 10px;">
                            <form role="form" method="post" action="{!! route('admin.catnews.create') !!}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="sub-title">Tiêu đề <span>*</span></div>
                                <div>
                                    <input type="text" required="" name="name" id="name" class="form-control" placeholder="Tiêu đề">
                                </div>
                                <div class="sub-title">Slug <span>*</span></div>
                                <div>
                                    <input type="text" required="" name="slug" id="slug" class="form-control" placeholder="Slug">
                                </div>

                                <div class="sub-title">Rel <span>*</span></div>
                                <div>
                                    <select required name="rel" id="rel" class="form-control">
                                        <option value="">Lựa chọn</option>
                                        <option value="dofollow">dofollow</option>
                                        <option value="nofollow">nofollow</option>
                                    </select>
                                </div>

                                <table style="margin: 0px;padding: 0px;width: 100%;">
                                    <tr>
                                        <td style="text-align: left;vertical-align: top;">
                                            <div class="sub-title">Thứ tự <span>*</span></div>
                                            <div>
                                                <input type="number" required="" min="0" style="width: 120px;" name="thutu" id="thutu" class="form-control" placeholder="Thứ tự">
                                            </div>
                                        </td>
                                        <td style="text-align: right;vertical-align: top;">
                                            <div class="sub-title" style="width: 100%;text-align: left;">Trạng thái</div>
                                            <div>
                                                <select name="status" class="form-control" style="width: 120px;">
                                                    <option value="1">Hiển thị</option>
                                                    <option value="0">Ẩn</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <div class="sub-title">Mô tả</div>
                                <div>
                                    <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3"></textarea>
                                </div>
                            <div style="text-align: right;">
                                <button type="submit" name="add_cat_news" style="margin-top: 10px;" class="btn btn-primary">Thêm mới</button>
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
