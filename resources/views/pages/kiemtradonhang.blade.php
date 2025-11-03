@extends('layout')
@section('content')
<link href="https://agent.datacom.vn/Styles/Site.css?v=1.8" rel="stylesheet" type="text/css" />
<style type="text/css">
	.wapdonhang{ width: 80%;margin: 0 auto;height: auto; }
	.wapdonhang label{ font-weight: normal; }
	.wapdonhang h2{ font-size: 21px; }
	.wapdonhang .red{ color: red; }
	.borderred{ border: solid 1px red; }
	.dxeButton img{ display: none; }
	.price{ float: right!important;width: 100%!important; }
	.booking-summary{ margin-bottom: 10px; }
	.content td{ padding: 5px; }
</style>
<script type="text/javascript">
 function fnLocalSelect(){
	 var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
	 var v=$('#txtSearch').val();
	 if ((v == "") || (v == "Nhập Từ Khóa Tìm Kiếm")) {
		  alert('Bạn chưa nhập vào từ khóa tìm kiếm');
		  $("#txtSearch").addClass("borderred");
		  $("#txtSearch").focus();
		  return;
	  }
	  
	 $.ajax({
		 url:"{{ route('search.local') }}",
		 method:"POST",
		 data:{id:v, _token:_token},
		 success:function(data){
			 $("#dbo_contents").fadeIn();
			 $("#dbo_contents").html(data);
		 }
	 });
 }
 
 function KeyPressSearchHome(e) {
	 var keynum = 0;
	 if (window.event) // IE
		 keynum = e.keyCode;
	 else if (e.which) // Netscape/Firefox/Opera
		 keynum = e.which;
	 if (keynum == 10 || keynum == 13) {
		 try {
			 var tukhoa = $("#txtSearch").val();
			 if ((tukhoa == "") || (tukhoa == "Nhập Từ Khóa Tìm Kiếm")) {
				 alert('Bạn chưa nhập vào từ khóa tìm kiếm');
				 $("#txtSearch").focus();
				 return false;
			 } else {
				 fnLocalSelect();
				 return false;
			 }
		 } catch (ex) {
			 alert(ex.message);
		 }
	 }
	 else {
		 return true;
	 }
 };
</script>
{{ csrf_field() }}
	<div class="wrapper page-has-banner ve-may-bay">
		<!-- Body -->
		<div class="main-content ">
			<div class="content">
				<div class="page-content-artice">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 class="heading_content_pages">KIỂM TRA ĐƠN HÀNG</h1>
						
						<div class="wapdonhang">
								<div class="form-group">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<h2 style="text-align:left;margin:5px 0 0 0;padding:0px;font-size:16px;">Vui lòng nhập mã đơn hàng:</h2>	
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<input type="text" class="form-control" onkeypress="return KeyPressSearchHome(event);" style="margin-bottom: 10px;" id="txtSearch" name="txtSearch" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<p>&nbsp;</p>
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<input onclick="fnLocalSelect();" style="margin-top: 0px;" class="btn btn-primary" type="button" id="btnSubmit" name="btnSubmit" value="GỬI" />
									</div>
								</div>
								<p>&nbsp;</p>
							<div class="dbo_contents" id="dbo_contents">
								
								
							</div>
						</div>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
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
