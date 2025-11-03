@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ KHÁCH ĐẶT TOURS</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<div style="width:80%;margin:0 auto;text-align:center;" class="alert alert-success">'.$message.'</div>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 5%;">STT</th>
                                    <th style="">Họ tên</th>
                                    <th style="">SĐT</th>
                                    <th style="">Email</th>
                                    <th style="">Ngày đặt</th>
                                    <th style="width: 17%;text-align: center;">Tùy chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                @foreach($all_tours_cus as $key => $val)
                                    <?php $i++;?>
                                    <td style="width: 5%;"><?php echo $i;?></td>
                                    <td style="">{{$val->fullname}}</td>
                                    <td style="">{{$val->phone}}</td>
                                    <td style="">{{$val->email}}</td>
                                    <td style="">{{$val->date}}</td>
                                    <td style="width: 17%;text-align: center;">
                                        <a title="Xem" href="javascript:void(0);"><i style="font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></a>
                                        | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="javascript:void(0);">Xóa</a>
                                    </td>
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
