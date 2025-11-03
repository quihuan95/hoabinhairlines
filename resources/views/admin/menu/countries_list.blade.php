@extends('dashboard')
@section('admin_content')
	<div id="page-inner">

		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<p style="text-align: center;">QUẢN LÝ TỈNH / THÀNH PHỐ</p>
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
							<a class="btn btn-primary" href="{!! route('admin.countries.add') !!}">Thêm mới</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th>Tên</th>
									<th style="width: 10%;text-align: center;">STT</th>
									<th style="width: 15%;text-align: center;">Tùy chỉnh</th>
								</tr>
								</thead>
								<tbody>
								<?php showCategories($all_countries)?>
								</tbody>
							</table>
							
							</div>
							
								<hr/>
							<p>&nbsp;</p>	
								<?php
								$countries=App\Models\Menus::render_contries();
								echo $countries;
								?>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>

	
@endsection
<?php
function showCategories($categories,$parent_id=0,$char=''){
	foreach ($categories as $key=>$item){
		//Nếu là chuyên mục con thì hiển thị
		if($item->pid==$parent_id){
			$strbg=$item->status==0?' style="background:#dedede;"':'';
			$link_del=" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Bạn có thật sự muốn xóa?')\"  href=\"".route('admin.countries.delete',array($item->id)) ."\" ";
			echo '<tr '.$strbg.'><td>'.$char.$item->title.'</td><td style="text-align: center;">'.$item->sort.'</td><td style="text-align: center;"><a class="btn btn-primary btn-sm" href="edit/'.$item->id.'/'.$item->pid.'"><i class="fa fa-edit"></i> Sửa</a> &nbsp; <a '.$link_del.'><i class="fa fa-trash"></i> Xóa</a></td></tr>';
			unset($categories[$key]);
			//Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
			showCategories($categories,$item->id,$char.' --- ');
		}
	}
}
?>
