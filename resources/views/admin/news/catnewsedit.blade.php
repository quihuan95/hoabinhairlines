@extends('dashboard')
@section('admin_content')
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="text-align: center;">QUẢN LÝ DANH MỤC TIN TỨC</p>
                    </div>
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    <div class="panel-body">
                        <div class="col-md-5" style="background-color: antiquewhite;border-radius: 5px;padding-bottom: 10px;">
                            <form role="form" method="post" action="{!! route('admin.catnews.update') !!}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" id="id" name="id" value="{{$onecatnews->id}}"/>
                                <input type="hidden" id="created_at" name="created_at" value="{{$onecatnews->created_at}}"/>
                                <input type="hidden" id="updated_at" name="updated_at" value="{{$onecatnews->updated_at}}"/>
                                <div class="sub-title">Tiêu đề <span>*</span></div>
                                <div>
                                    <input type="text" required="" name="name" id="name" class="form-control" placeholder="Tiêu đề" value="{{$onecatnews->title}}">
                                </div>
                                <div class="sub-title">Slug <span>*</span></div>
                                <div>
                                    <input type="text" required="" name="slug" id="slug" class="form-control" placeholder="Slug" value="{{$onecatnews->slug}}">
                                </div>

                                <div class="sub-title">Rel <span>*</span></div>
                                <div>
                                    <select required name="rel" id="rel" class="form-control">
                                        @if($onecatnews->rel=='nofollow')
                                            <option value="">Lựa chọn</option>
                                            <option value="dofollow">dofollow</option>
                                            <option selected value="nofollow">nofollow</option>
                                        @else
                                            <option value="">Lựa chọn</option>
                                            <option selected value="dofollow">dofollow</option>
                                            <option value="nofollow">nofollow</option>
                                        @endif

                                    </select>
                                </div>

                                <table style="margin: 0px;padding: 0px;width: 100%;">
                                    <tr>
                                        <td style="text-align: left;vertical-align: top;">
                                            <div class="sub-title">Thứ tự <span>*</span></div>
                                            <div>
                                                <input type="number" value="{{$onecatnews->position}}" required="" min="0" style="width: 120px;" name="thutu" id="thutu" class="form-control" placeholder="Thứ tự">
                                            </div>
                                        </td>
                                        <td style="text-align: right;vertical-align: top;">
                                            <div class="sub-title" style="width: 100%;text-align: left;">Trạng thái</div>
                                            <div>
                                                <select name="status" class="form-control" style="width: 120px;">
                                                    @if($onecatnews->status==1)
                                                        <option selected value="1">Hiển thị</option>
                                                        <option value="0">Ẩn</option>
                                                    @else
                                                        <option value="1">Hiển thị</option>
                                                        <option selected value="0">Ẩn</option>
                                                    @endif

                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <div class="sub-title">Mô tả</div>
                                <div>
                                    <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3">{!! $onecatnews->desception !!}</textarea>
                                </div>
                                <div style="text-align: right;">
                                    <button type="submit" name="add_cat_news" style="margin-top: 10px;" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>
@endsection
