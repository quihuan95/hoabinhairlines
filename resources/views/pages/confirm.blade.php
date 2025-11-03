@extends('layout')
@section('content')
<style type="text/css">
	.wapdonhang{ width: 80%;margin: 0 auto;height: auto; }
	.wapdonhang label{ font-weight: normal; }
	.wapdonhang h2{ font-size: 21px; }
	.wapdonhang .red{ color: red; }
	.border_red{ border: solid 1px red; }
	[type="radio"]:checked, [type="radio"]:not(:checked){ position: initial;left:0; }
</style>
<script type="text/javascript">
	function fnFrmSubmit() {
		if(!fnValid()){
			return;
		}else {
			$('#frm_submit').html('<p id="frm_submit" style="text-align: center;"><button disabled style="margin-top:10px;text-transform: uppercase;padding: 10px 30px;font-weight: bold;font-size: 18px;border:none;" type="button" class="btn btn-primary">Đang trong quá trình xử lý. Vui lòng chờ trong giây lát...</button></p>');
			var check_pay = document.getElementsByName('pay');
			if(check_pay[0].checked===true){
			  document.getElementById("aspnetForm").action = "{!! route('pay.local') !!}";
			  document.getElementById("aspnetForm").submit();	
			}else {
				document.getElementById("aspnetForm").action = "register-222.html";
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
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						@if($fdata->txn=='99')
						<h1 style="font-size: 28px;" class="heading_content_pages">Thanh toán của bạn đã bị hủy</h1>
						<div>
						<p style="text-align: center;">Thông tin đặt hàng của bạn đã được gửi đến HoaBinh Airlines.</p>
						<p style="text-align: center;">Nếu bạn có bất cứ vấn đề gì trong quá trình đăng ký vui lòng liên hệ với chúng tôi qua địa chỉ Email <a href="ha.nguyen@hoabinh-group.com">ha.nguyen@hoabinh-group.com</a> Điện thoại: <a href="tel:0903467638">0903467638</a>
						</div>
						@elseif($fdata->txn=='0')
						<h1 style="font-size: 28px;" class="heading_content_pages">Thanh toán thành công</h1>
						<div>
						<p style="text-align: center;">Chúc mừng bạn đã thanh toán thành công đơn hàng trên HoaBinh Airlines.</p>
						<p style="text-align:center;">Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
						<p style="text-align: center;">Nếu bạn có bất cứ vấn đề gì trong quá trình đăng ký vui lòng liên hệ với chúng tôi qua địa chỉ email <a href="ha.nguyen@hoabinh-group.com">ha.nguyen@hoabinh-group.com</a>. Điện thoại: <a href="tel:0903467638">0903467638</a>
						</div>
						@else
						<h1 style="font-size: 28px;" class="heading_content_pages">Đã có lỗi xảy ra trong quá trình thanh toán</h1>
						<div>
						
						<p style="text-align: center;">Vui lòng liên hệ với chúng tôi qua địa chỉ Email <a href="ha.nguyen@hoabinh-group.com">ha.nguyen@hoabinh-group.com</a><br/>
						Điện thoại: <a href="tel:0903467638">0903467638</a> để được hỗ trợ trong thời gian sớm nhất;
						</div>
						@endif
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				</div>

				<!-- Các chặng bay và hãng bay hàng đầu -->

				<!-- Đăng ký nhận tin khuyến mãi -->

			</div>
		</div>
		<!-- End Body -->
@endsection
