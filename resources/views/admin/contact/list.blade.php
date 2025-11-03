@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ THÔNG TIN LIÊN HỆ</p>
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
                                    <th style="width: 3%;">STT</th>
                                    <th style="width: 10%;">Fullname</th>
                                    <th style="width: 20%;">Email</th>
                                    <th>Address</th>
                                    <th>File</th>
                                    <th style="width: 15%;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                @foreach($all_contact as $key => $val)
                                    <tr class="odd gradeX">
                                        <td class="center" style="text-align: center;"><?php $i++; echo $i; ?></td>
                                        <td>{{ $val->fullname }}</td>
                                        <td>{{ $val->email }}</td>
                                        <td>{{ $val->address }}</td>
                                        <td>{{ $val->file }}</td>
                                        <td class="center" style="text-align: center;">
                                            <a href="{{URL::to('/admin/contact/view/'.$val->id )}}">Chi tiết</a>
                                            <!--| <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{{URL::to('/del-contact/'.$val->id )}}">Xóa</a>-->
                                        </td>
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
