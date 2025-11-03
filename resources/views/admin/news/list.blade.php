@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ TIN TỨC</p>
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
                            <a class="btn btn-primary" href="{{URL::to('/admin/news/add')}}">Thêm mới</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 10%;vertical-align: middle;text-align:center;">Hình ảnh</th>
                                    <th style="text-align:left;vertical-align: middle;">Tiêu đề / Nội dung tóm tắt</th>
                                    <th style="width: 15%;text-align:center;vertical-align: middle;">Ngày tạo</th>
                                    <th style="width: 15%;text-align: center;vertical-align: middle;">Tùy chỉnh</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_news as $key => $val)
                                    <?php $inactive=''; if($val->status!='1'){ $inactive='style="background-color: #ccc;"'; }else{ $inactive='style="background-color: initial;"'; } ?>
                                    <tr class="odd gradeX" <?php echo $inactive; ?> >
                                        <th><img style="width: 100%;" src="{{asset('public/uploads/news/'.$val->picture)}}" /></th>
                                        <td><a style="font-weight:bold;" href="{{URL::to('/admin/news/edit/'.$val->id )}}">{!! $val->title !!}</a>
                                    <div style="line-height: 22px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                        {!! $val->news_desc !!}
                                    </div>
                                    </td>
                                        <td style="text-align:center;vertical-align: middle;">
                                            {{ $val->created_at }}
                                        </td>
                                        <td class="center" style="text-align: center;vertical-align: middle;">
                                            <?php
                                            if($val->status==0){ ?>
                                            <a title="Ẩn" href="{!! route('admin.news.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            <?php
                                            }else{ ?>
                                            <a title="Hiển thị" href="{!! route('admin.news.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></a>
                                            <?php
                                            }
                                            ?> |
                                            <a href="{!! route('admin.news.edit',array($val->id)) !!}">Sửa</a> | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.news.delete',array($val->id)) !!}">Xóa</a></td>
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
