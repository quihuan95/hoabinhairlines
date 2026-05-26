@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">ĐĂNG KÝ POPUP HBA</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<div style="width:80%;margin:0 auto;text-align:center;" class="alert alert-success">'.$message.'</div>';
                        Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        @if(count($records) === 0)
                            <p style="text-align: center; margin-bottom: 15px;">Chưa có đăng ký nào.</p>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 4%;">STT</th>
                                    <th>Họ tên</th>
                                    <th>SĐT</th>
                                    <th>Email</th>
                                    <th style="width: 6%;">Số vé</th>
                                    <th>Chiều đi</th>
                                    <th>Chiều về</th>
                                    <th style="width: 14%;">Thời gian gửi</th>
                                    <th style="width: 8%;text-align: center;">Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach($records as $val)
                                    <?php $i++; ?>
                                    <tr class="odd gradeX">
                                        <td class="center" style="text-align: center;">{{ $i }}</td>
                                        <td>{{ $val->fullname }}</td>
                                        <td>{{ $val->phone }}</td>
                                        <td>{{ $val->email }}</td>
                                        <td style="text-align: center;">{{ $val->num }}</td>
                                        @php
                                            $chieuDi = $val->date;
                                            $chieuVe = $val->address ?? '';
                                            if ($chieuVe === '' && strpos($chieuDi, ' → ') !== false) {
                                                $parts = explode(' → ', $chieuDi, 2);
                                                $chieuDi = $parts[0];
                                                $chieuVe = $parts[1] ?? '';
                                            }
                                        @endphp
                                        <td>{{ $chieuDi }}</td>
                                        <td>{{ $chieuVe }}</td>
                                        <td>{{ $val->create_at }}</td>
                                        <td class="center" style="text-align: center;">
                                            <a onclick="return confirm('Bạn có chắc muốn xóa bản đăng ký này?')"
                                               href="{{ route('admin.tour_promo_popup.delete', ['id' => $val->id]) }}">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
