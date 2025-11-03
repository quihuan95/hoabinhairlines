@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ TOURS</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<div style="width:80%;margin:0 auto;text-align:center;" class="alert alert-success">'.$message.'</div>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <div style="text-align: right;margin-bottom: 10px;">
                            <a class="btn btn-primary" href="{{route('admin.tours.add')}}">Thêm mới</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 15%;">Hình ảnh</th>
                                    <th style="">Tiêu đề</th>
                                    <th style="width: 17%;text-align: center;">Tùy chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_tours as $key => $val)
                                    <tr class="odd gradeX">
                                        <th><img style="width: 100%;" src="{{asset('public/uploads/tours/'.$val->images)}}" /></th>
                                        <td><a href="{!! route('admin.tours.edit',array($val->id)) !!}">{{ $val->title }}</a></td>
                                        
                                        <td class="center" style="text-align: center;vertical-align: middle;">
                                            <?php
                                            if($val->status==0){ ?>
                                            <a title="Ẩn" href="{!! route('admin.tours.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            <?php
                                            }else{ ?>
                                            <a title="Hiển thị" href="{!! route('admin.tours.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></a>
                                            <?php
                                            }
                                            ?> |
                                            <a href="{!! route('admin.tours.edit',array($val->id)) !!}">Sửa</a> | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.tours.delete',array($val->id)) !!}">Xóa</a></td>
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
