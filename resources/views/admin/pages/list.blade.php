@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ TRANG</p>
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
                            <a class="btn btn-primary" href="{{URL::to('/admin/pages/insert')}}">Thêm mới</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 5%;text-align: center;vertical-align: middle;">STT</th>
                                    <th style="width: 20%;">Tiêu đề</th>
                                    <th style="width: 10%;text-align: center;vertical-align: middle;">Ngày tạo</th>
                                    <th style="width: 15%;">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                @foreach($all_pages as $key => $val)
                                    <?php $i++;?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;vertical-align: middle;"><?php echo $i;?></td>
                                        <td><a style="font-weight: bold;font-size: 15px;" href="{{URL::to('/admin/pages/edit/'.$val->id )}}">{{ $val->title }}</a><br/>
                                            <span style="font-size: 10px;">
                                                Đường dẫn trang:<br/>
                                        <i><a href="{{URL::to('pages/'.$val->slug)}}">{{ URL::to('pages/'.$val->slug) }}</a></i>
                                            </span>
                                        </td>
                                        <td style="text-align: center;vertical-align: middle;">
                                            <?php
                                            $dateObject = DateTime::createFromFormat('Y-m-d H:i:s', $val->created_at);
                                            echo $dateObject->format('d/m/Y');
                                            ?>
                                        </td>
                                        <td class="center" style="text-align: center;vertical-align: middle;">
                                            <?php
                                            if($val->status==0){ ?>
                                                <a title="Ẩn" href="{{URL::to('/admin/unactive-pages/'.$val->id )}}"><i style="font-size:18px;" class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            <?php
                                            }else{ ?>
                                                <a title="Hiển thị" href="{{URL::to('/admin/active-pages/'.$val->id )}}"><i style="font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></a>
                                            <?php
                                            }
                                            ?> |
                                            <a href="{{route('admin.pages.edit',array($val->id))}}"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a> | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.pages.delete',array($val->id)) !!}"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a></td>
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
