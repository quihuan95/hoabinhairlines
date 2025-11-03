@extends('dashboard')
@section('admin_content')
    <div class="header">
        <h1 class="page-header">
            Trang chủ <small>Cấu hình Website</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('admin/dashboard')}}">Trang chủ</a></li>
            <li class="active">Cấu hình</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">

                        <form method="post" action="{!! route('admin.config.postupdate') !!}">
                            {{ csrf_field() }}
                            <input type="hidden" id="id" name="id" value="{{ $config->id }}"/>
                            <input type="hidden" name="created_at" value="{{ $config->created_at }}"/>
                            <div class="sub-title">Title</div>
                            <div>
                                <input type="text" required name="meta_title" value="{{$config->title}}" class="form-control" placeholder="Title">
                            </div>
                            <div class="sub-title">Meta Desception</div>
                            <div>
                                <textarea required class="form-control" placeholder="Meta Desception" name="meta_desc" rows="3">{!! $config->description !!}</textarea>
                            </div>
                            <div class="sub-title">Meta Keyword</div>
                            <div>
                                <textarea required class="form-control" placeholder="Meta Keyword" name="meta_keyword" rows="2">{!! $config->keywords !!}</textarea>
                            </div>
                            <button type="submit" name="update_config" style="margin-top: 10px;" class="btn btn-default">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer><p>All right reserved.</p></footer>
    </div>
@endsection
