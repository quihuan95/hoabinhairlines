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
<?php
$vnp_TmnCode = "FUKCRYHY"; //Website ID in VNPAY System
$vnp_HashSecret = "GAMIJAGWTXJPVNRDQWBTOQYKIAKMSEOI"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "https://hoabinhairlines.vn/confirm-vnpay";
$vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));

$vnp_SecureHash = $_GET['vnp_SecureHash'];
$inputData = array();
foreach ($_GET as $key => $value) {
	if (substr($key, 0, 4) == "vnp_") {
		$inputData[$key] = $value;
	}
}

unset($inputData['vnp_SecureHash']);
ksort($inputData);
$i = 0;
$hashData = "";
foreach ($inputData as $key => $value) {
	if ($i == 1) {
		$hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
	} else {
		$hashData = $hashData . urlencode($key) . "=" . urlencode($value);
		$i = 1;
	}
}

$secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
?>
	<div class="wrapper page-has-banner ve-may-bay">
		<!-- Body -->
		<div class="main-content ">
			<div class="content">
				<div class="">
				<div class="">
					<div class="">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h1 class="panel-title">Payment status / Kết quả thanh toán</h1>
							</div>
							<div class="panel-body">
								<div class="row">
									<?php
									$sotien=$_GET['vnp_Amount']/100;
									/*App\Models\Payments::fnUpdateStatusVNPAY($_GET['vnp_OrderInfo'],$_GET['vnp_ResponseCode']);*/
									
									/*$check=App\Models\Payments::vnp_TxnRef_check($_GET['vnp_OrderInfo'],$_GET['vnp_TxnRef']);
									$check_amount=App\Models\Payments::vnp_Amount_check($_GET['vnp_OrderInfo'],$sotien);
									$check_vnp_SecureHash=App\Models\Payments::vnp_SecureHash_check($_GET['vnp_OrderInfo'],$_GET['vnp_SecureHash']);
									
									if($check=='1'){
										echo '<p style="text-align:center;">Order Not Found</p>';
										echo '<p style="text-align:center;">Không tìm thấy giao dịch được confirm</p>';
										
									}
									else if($check_amount=='1'){
										echo '<p style="text-align:center;">Invalid amount</p>';
										echo '<p style="text-align:center;">Số tiền không hợp lệ</p>';
										
									}*/
									/*else if($check_vnp_SecureHash=='1'){
										echo '<p style="text-align:center;">Invalid Checksum</p>';
										echo '<p style="text-align:center;">Chữ ký không hợp lệ</p>';
										App\Models\Payments::fnUpdateStatusVNPAY($_GET['vnp_OrderInfo'],$_GET['vnp_ResponseCode']);
									}*/
									?>
									<div class="col-md-12">
										<div class="table-responsive">
											<div class="form-group">
												<label >Mã đơn hàng:</label>
										
												<label><?php echo $_GET['vnp_TxnRef'] ?></label>
											</div>    
											<div class="form-group">
										
												<label >Số tiền:</label>
												<label><?php echo number_format($sotien); ?></label>
											</div>  
											<div class="form-group">
												<label >Nội dung thanh toán:</label>
												<label><?php echo $_GET['vnp_OrderInfo'] ?></label>
											</div> 
											<div class="form-group">
												<label >Mã phản hồi (vnp_ResponseCode):</label>
												<label><?php echo $_GET['vnp_ResponseCode'] ?></label>
											</div> 
											<div class="form-group">
												<label >Mã GD Tại VNPAY:</label>
												<label><?php echo $_GET['vnp_TransactionNo'] ?></label>
											</div> 
											<div class="form-group">
												<label >Mã Ngân hàng:</label>
												<label><?php echo $_GET['vnp_BankCode'] ?></label>
											</div> 
											<div class="form-group">
												<label >Thời gian thanh toán:</label>
												<label><?php echo $_GET['vnp_PayDate'] ?></label>
											</div> 
											<div class="form-group">
												<label >Kết quả:</label>
												<label>
													<?php
													if ($secureHash == $vnp_SecureHash) {
														if ($_GET['vnp_ResponseCode'] == '00') {
															echo "<span style='color:blue'>GD Thanh cong</span>";
														} else {
															echo "<span style='color:red'>GD Khong thanh cong</span>";
														}
													} else {
														echo "<span style='color:red'>Chu ky khong hop le</span>";
													}
													?>
										
												</label>
											</div> 
										</div>
										
									</div>
									
								</div>
								
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<a href="https://hoabinhairlines.vn/thanh-toan-qua-vi-vnpay" class="btn btn-primary">Back to continue payment...</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

				<!-- Các chặng bay và hãng bay hàng đầu -->

				<!-- Đăng ký nhận tin khuyến mãi -->

			</div>
		</div>
		<!-- End Body -->
@endsection
