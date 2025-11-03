@extends('layout')
@section('content')
<style type="text/css">
	.wapdonhang{ /*width: 80%;margin: 0 auto;height: auto;*/ }
	.wapdonhang label{ font-weight: bold; }
	.wapdonhang h2{ font-size: 21px; }
	.wapdonhang .red{ color: red; }
	.border_red{ border: solid 1px red; }
	[type="radio"]:checked, [type="radio"]:not(:checked){ position: initial;left:0; }
	.wapper_payment{ width: 800px;margin: 0 auto;height: auto;box-shadow: 0px 0px 5px 5px #ccc;
		padding: 20px 10px;border-radius: 10px;max-width: 100%; }
	.hinhthucthanhtoan table{ width: 100%;clear: both; }
	.hinhthucthanhtoan td{ padding: 5px;text-align: left;vertical-align: middle; }
	.hinhthucthanhtoan input{ margin: 0px;padding: 0px; }
	.tdone{ width: 15px; }
	.tdtwo{ width: 110px; }
</style>
<script type="text/javascript">
	function fnFrmSubmit() {
		if(!fnValid()){
			return;
		}else {
			$('#frm_submit').html('<p id="frm_submit" style="text-align: center;"><button disabled style="margin-top:10px;padding: 10px 30px;font-weight: bold;font-size: 18px;border:none;background-color: forestgreen;" type="button" class="btn btn-primary"><img alt="" style="height: 15px;" src="https://hoabinhairlines.vn/public/frontend/css/images/loading.gif"/> Đang trong quá trình xử lý. Vui lòng chờ trong giây lát...</button></p>');
			var check_pay = document.getElementsByName('pay');
			if(check_pay[0].checked===true){
			  	document.getElementById("aspnetForm").action = "{!! route('payment.momo') !!}";
			  	document.getElementById("aspnetForm").submit();	
			}else {
				document.getElementById("aspnetForm").action = "{!! route('pay.local') !!}";
				document.getElementById("aspnetForm").submit();	
			}
		}
	}
	function fnValid() {
		var arr=new Array();
		
		if($('#txtHoten').val()==''){
			arr.push('txtHoten'); 
			$('#txtHoten').addClass('border_red');
		}else {
			$('#txtHoten').removeClass('border_red');
		}
		if($('#txtEmail').val()==''){
			arr.push('txtEmail'); 
			$('#txtEmail').addClass('border_red');
		}else {
			$('#txtEmail').removeClass('border_red');
		}
		if($('#txtDidong').val()==''){
			arr.push('txtDidong'); 
			$('#txtDidong').addClass('border_red');
		}else {
			$('#txtDidong').removeClass('border_red');
		}
		if($('#txtSotien').val()==''){
			arr.push('txtSotien'); 
			$('#txtSotien').addClass('border_red');
		}else {
			$('#txtSotien').removeClass('border_red');
		}
		var check_pay = document.getElementsByName('pay');
		if(check_pay[0].checked===false && check_pay[1].checked===false){
			arr.push('onepay'); 
			$('#onepay').addClass('border_red');
		}else {
			$('#onepay').removeClass('border_red');
		}
		
		if(arr.length!=0){
			$('#'+arr[0]).focus();
			return false;
		}else {
			return true;
		}
	}
</script>
	<div class="wrapper page-has-banner ve-may-bay">
		<!-- Body -->
		<div class="main-content ">
			<div class="content">
				<div class="page-content-artice">
					<div class="wapper_payment">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>&nbsp;</p>
							<h1 style="font-size: 28px;" class="heading_content_pages">CỔNG THANH TOÁN ĐÃ ĐÓNG</h1>
							<!--<h1 style="font-size: 28px;" class="heading_content_pages">THANH TOÁN ĐƠN HÀNG</h1>
								<div class="wapdonhang">
								<h2>Thông tin khách hàng</h2>	
								<form method="post" id="aspnetForm" name="aspnetForm" class=" " enctype="multipart/form-data">
									{{ csrf_field() }}
										<div class="form-group">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label for="txtHoten" class="font_8">
													Họ và tên <span class="red">*</span>:</label>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" style="margin-bottom: 10px;" id="txtHoten" name="txtHoten" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label for="txtEmail" class="font_8">
													Email <span class="red">*</span>:</label>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" style="margin-bottom: 10px;" id="txtEmail" name="txtEmail" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label for="txtDidong" class="font_8">
													Điện thoại <span class="red">*</span>:</label>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input type="text" class="form-control" style="margin-bottom: 10px;" id="txtDidong" name="txtDidong" placeholder="">
											</div>
										</div>
									
								
								<h2 style="float:left;">Thông tin thanh toán <i style="float:right;font-size:14px;margin-top: 5px;margin-left: 10px;">(Quý khách vui lòng nhập mã đơn hàng và số tiền cần thanh toán)</i></h2>
								
								<div class="form-group" style="width:100%;display:block;">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<label for="txtMadonhang" class="font_8">
											Mã đặt chỗ:</label>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" style="margin-bottom: 10px;" id="txtMadonhang" name="txtMadonhang" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<label for="txtSotien" class="font_8">
											Số tiền (VNĐ) <span class="red">*</span>:</label>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="number" class="form-control" style="margin-bottom: 10px;" id="txtSotien" name="txtSotien" placeholder="">
										<p>
											<span>
												<span style="color:red;">* <i>Đơn hàng sẽ được cộng thêm 150.000 VNĐ phí xuất vé</i></span>
											</span>
										</p>
									</div>
								</div>
								<div class="form-group" style="display:block;width:100%;">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<label for="txtghichu" class="font_8">
											Ghi chú:</label>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea id="txtghichu" name="txtghichu" class="form-control" cols="3" rows="3" style="width:100%;"></textarea>
									</div>
								</div>
								<h2 style="float:left;margin:0px;">&nbsp;</h2>
								<div class="form-group" style="display:block;width:100%;">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<h2>Hình thức thanh toán:</h2>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="hinhthucthanhtoan">
											<p><label> </label></p>
											<div style="width:100%;height:auto;display:block;">
												<table style="float: left;">
													<tr>
														<td class="tdone"><input checked type="radio" id="momo" name="pay" value="1" /></td>
														<td class="tdtwo"><label for="momo"><img alt="Thanh Toán Bằng Ví MoMo" src="{{ asset('public/frontend/css/images/momo_icon_rectangle.png') }}" style="height:25px;" /></label> </td>
														<td><label for="momo">Thanh Toán Bằng Ví MoMo</label></td>
													</tr>
												</table>
											</div>
											<p style="display:none;"><label> </label></p>
											<div style="width:100%;height:auto;display:none;">
												<table style="float: left;">
													<tr>
														<td class="tdone"><input type="radio" id="onepay" name="pay" value="0" /></td>
														<td class="tdtwo"><label for="onepay"><img alt="Thanh toán qua ONEPAY" src="https://www.onepay.vn/wp-content/uploads/2022/01/Logo_OnePay.svg" style="height:25px;" /></label> </td>
														<td><label for="onepay">Thanh toán qua cổng Onepay</label></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group" style="display:block;width:100%;">
									<div style="display:block;">
										<p>&nbsp;</p>
										<p>&nbsp;</p>
									</div>
										<div id="frm_submit">
											<p style="text-align:center;display:block;">
											<button type="button" onclick="fnFrmSubmit()" style="margin-top: 20px;" class="btn btn-primary" id="btnSubmit" name="btnSubmit">
												<i class="fa fa-sign-in" aria-hidden="true"></i> Thanh toán
											</button>
											</p>
										</div>
								</div>
									
								</form>
								</div>-->
							<p>&nbsp;</p>
							<p>&nbsp;</p>
						</div>
						<div style="width:100%;height:1px;clear:both;"></div>
					</div>
					<p>&nbsp;</p>
				</div>

				<!-- Các chặng bay và hãng bay hàng đầu -->

				<!-- Đăng ký nhận tin khuyến mãi -->

			</div>
		</div>
		<!-- End Body -->
@endsection
