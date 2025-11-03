@extends('dashboard')
@section('admin_content')
	<div id="page-inner">

		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<p style="text-align: center;">QUẢN LÝ THANH TOÁN TRỰC TUYẾN</p>
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
									<th style="width: 5%;text-align: center;vertical-align: middle;">STT</th>
									<th style="width: 10%;text-align: center;vertical-align: middle;">Mã đơn hàng</th>
									<th style="width: 10%;text-align: center;vertical-align: middle;">Mã đặt chỗ</th>
									<th style="width: 20%;">Họ và tên / Email</th>
									<th style="text-align: center;vertical-align: middle;">Di động</th>
									<th style="text-align: center;vertical-align: middle;">Số tiền</th>
									<th style="width: 10%;text-align: center;vertical-align: middle;">Trạng thái</th>
									<th style="text-align: center;vertical-align: middle;">Ngày / Tháng</th>
									<th style="text-align: center;vertical-align: middle;">Ghi chú</th>
								</tr>
								</thead>
								<tbody>
								<?php $i=0;?>
								@foreach($list as $k=>$v)
								<?php $i++;?>
								<tr>
									<td style="width: 5%;text-align: center;vertical-align: middle;"><?php echo $i; ?></td>
									<td style="width: 10%;text-align: center;vertical-align: middle;">{!! $v->vpc_OrderInfo !!}</td>
									<td style="width: 10%;text-align: center;vertical-align: middle;">{!! $v->orderID !!}</td>
									<td style="width: 20%;"><b>{!! $v->fullname !!}</b><br/>{!! $v->email !!}</td>
									<td>{!! $v->phone !!}</td>
									<td><b style="color:brown;"><?php echo number_format($v->fee);?></b></td>
									<td style="text-align: center;vertical-align: middle;">
										@if($v->txn==0)
										<span class="label label-success">Giao dịch thành công</span>
										@else
										<span class="label label-danger">{!! $v->response !!}</span>
										@endif
									</td>
									<td style="text-align: center;vertical-align: middle;">{!! $v->created_at !!}</td>
									<td>{!! $v->notes !!}</td>
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
