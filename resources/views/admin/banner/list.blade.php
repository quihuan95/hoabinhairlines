@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ BANNER</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <div style="text-align: right;margin-bottom: 10px;">
                            <a class="btn btn-primary" href="{!! route('admin.banner.add') !!}">Thêm mới</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 10%;text-align:center;">Hình ảnh</th>
                                    <th style="text-align:left;">Tên Banner</th>
                                    <th style="width: 15%;text-align:center;">Tuỳ chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_banner as $key => $val)
                                    <tr class="odd gradeX">
                                        <th><img style="width: 100%;" src="{{asset('public/uploads/banner/'.$val->src)}}" /></th>
                                        <td><a href="{{URL::to('/admin/banner/edit/'.$val->id )}}">{{ $val->name }}</a></td>
                                        <td style="text-align:center;">
                                            <?php
                                            if($val->status==0){ ?>
                                            <a title="Ẩn" href="{!! route('admin.banner.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            <?php
                                            }else{ ?>
                                            <a title="Hiển thị" href="{{URL::to('/admin/active-banner/'.$val->id )}}"><i style="font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></a>
                                            <?php
                                            }
                                            ?> |
                                            <a href="{!! route('admin.banner.edit',array($val->id)) !!}">Sửa</a> | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.banner.delete',array($val->id)) !!}">Xóa</a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    </div>
@endsection
