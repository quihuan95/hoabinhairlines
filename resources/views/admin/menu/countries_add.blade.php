@extends('dashboard')
@section('admin_content')
	<div class="header" style="margin-top: 35px;">
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
			<li><a href="{!! route('admin.menu.list') !!}">Thành phố</a></li>
			<li class="active">Thêm mới</li>
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
						<form role="form" method="post" action="{!! route('admin.countries.create') !!}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="sub-title">Tiêu đề <span>*</span></div>
								<div>
									<input type="text" required name="tieude" id="tieude" class="form-control" placeholder="Tiêu đề">
								</div>
								<div class="sub-title">Code <span>*</span></div>
								<div>
									<input type="text" required name="code" id="code" class="form-control" placeholder="Code">
								</div>
								
								<div class="sub-title">Mô tả</div>
								<div>
									<textarea class="form-control" placeholder="Mô tả" name="desc" id="ckeditor" rows="5"></textarea>
								</div>

							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="sub-title">Danh mục cha</div>
								<div>
									<select class="form-control" name="category">
										<option value="0">-- Lựa chọn --</option>
										<?php showCategories($all_countries)?>
									</select>
								</div>
								<div class="sub-title">Thứ tự</div>
								<div>
									<input type="number" min="0" name="orders" class="form-control" placeholder="Thứ tự">
								</div>
								<div class="sub-title">Trạng thái</div>
								<div>
									<select name="status" class="form-control">
										<option value="1">Hiển thị</option>
										<option value="0">Ẩn</option>
									</select>
								</div>
								<hr style="margin: 10px 0px 0px 0px;padding: 0px;"/>
								<button type="submit" name="add_picture" style="margin-top: 10px;" class="btn btn-primary">Thêm mới</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

		<footer><p>All right reserved.</p></footer>
	</div>
	<script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>

	<script type="text/javascript" src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'desc', {
			filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
			filebrowserUploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'
		} );

	</script>
@endsection

<?php
function showCategories($categories,$parent_id=0,$char=''){
	foreach ($categories as $key=>$item){
//Nếu là chuyên mục con thì hiển thị
		if($item->pid==$parent_id){
			echo '<option value="'.$item->id.'">'.$char.$item->title.'</option>';
			unset($categories[$key]);
			//Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
			showCategories($categories,$item->id,$char.' --- ');
		}
	}
}
?>
