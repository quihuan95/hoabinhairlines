@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ NGƯỜI DÙNG</p>
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
                            <a data-toggle="modal" data-target="#defaultModal" class="btn btn-primary" href="javasctipt:void(0);">Thêm mới</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 5%;text-align: center;">STT</th>
                                    <th style="width: 20%;">Tài khoản</th>
                                    <th style="width: 20%;">Vai trò</th>
                                    <th>Họ & tên</th>
                                    <th>Phone</th>
                                    <th style="width: 15%;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                @foreach($all_user as $key => $val)
                                    <tr>
                                        <td style="text-align: center;"><?php $i++; echo $i;?></td>
                                        <td style="width: 20%;">{{$val->admin_email}}</td>
                                        <td style="width: 20%;">
                                            @if($val->role==0)
                                                Quản trị viên
                                            @else
                                                Biên tập viên
                                            @endif
                                        </td>
                                        <td>{{$val->admin_name}}</td>
                                        <td>{{$val->admin_phone}}</td>
                                        <td style="width: 15%;text-align: center;">
                                            <a title="Xem chi tiết" href="javascript:void(0);"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            |
                                            <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="http://eventcrew.hoabinhtourist.com/delete-user/{{$val->admin_id}}" title="Xóa" href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>
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

    <!-- Default Size -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" style="z-index: 9999999;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title" id="defaultModalLabel">THÊM MỚI NGƯỜI DÙNG</h3>
                 </div>
                <form role="form" method="post" action="{{URL::to('/save-user')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="modal-body">
                    <div class="message_wap">
                        <div class="messbody">
                        <table style="width: 100%;" cellspacing="4" cellpadding="4">
                            <tr>
                                <td style="width: 15%;"><label for="txtUsername">Username (Email):</label></td>
                                <td><input type="email" style="margin-bottom: 10px;" required="" id="txtUsername" name="txtUsername" class="form-control" placeholder="Username"></td>
                            </tr>
                            <tr>
                                <td style="width: 15%;"><label for="txtPassword">Password:</label></td>
                                <td><input type="password" style="margin-bottom: 10px;" required="" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td style="width: 15%;"><label for="role">Vai trò:</label></td>
                                <td>
                                    <select class="form-control" style="margin-bottom: 10px;" required id="role" name="role">
                                        <option value="">-- Lựa chọn --</option>
                                        <option value="0">Quản trị viên</option>
                                        <option value="1">Biên tập viên</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 15%;"><label for="txtFullname">Họ & tên:</label></td>
                                <td><input type="text" style="margin-bottom: 10px;" required="" id="txtFullname" name="txtFullname" class="form-control" placeholder="Họ & tên"></td>
                            </tr>
                            <tr>
                                <td style="width: 15%;"><label for="txtPhone">Phone:</label></td>
                                <td><input type="number" style="margin-bottom: 10px;" required="" id="txtPhone" name="txtPhone" class="form-control" placeholder="Phone"></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #e8bf4e;">
                    <button type="submit" style="background-color: #e8bf4e;color: #000;font-family: UTMAptima;font-weight: bold;" class="btn btn-link waves-effect">THÊM MỚI</button>
                    <button type="button" style="background-color: #e8bf4e;color: #000;font-family: UTMAptima;" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
