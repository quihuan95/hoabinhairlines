@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ EMAIL NHẬN TIN KHUYẾN MÃI</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 10%;text-align: center;">STT</th>
                                    <th>Email</th>
                                    <th style="width: 20%;">Ngày gửi</th>
                                    <th style="width: 15%;text-align: center;">Tùy chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                @foreach($list as $key => $val)
                                    <?php $i++;?>
                                    <tr class="odd gradeX">
                                        <td style="width: 10%;text-align: center;"><?php echo $i;?></td>
                                        <td>{{$val->email}}</td>
                                        <td style="width: 20%;">{{$val->create_at}}</td>
                                        <td style="width: 15%;text-align: center;"><a title="ẨN EMAIL" href="javascript:void(0);"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
