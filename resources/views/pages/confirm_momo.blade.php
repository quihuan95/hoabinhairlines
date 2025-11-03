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
header('Content-type: text/html; charset=utf-8');


$secretKey = 'OKq4ch02vuqIiea69ikKlNTKv2g6KNO3'; //Put your secret key in there
$accessKey='WIj5mZ7sGAgMhNd7';
$localMessage='';
if (!empty($_GET)) {
	$partnerCode = $_GET["partnerCode"];
	$orderId = $_GET["orderId"];
	$requestId = $_GET["requestId"];
	$amount = $_GET["amount"];	
	$orderInfo = $_GET["orderInfo"];
	$orderType = $_GET["orderType"];
	$transId = $_GET["transId"];
	$resultCode = $_GET["resultCode"];
	$message = $_GET["message"];
	$payType = $_GET["payType"];
	$responseTime = $_GET["responseTime"];
	$extraData = $_GET["extraData"];
	$m2signature = $_GET["signature"]; //MoMo signature
	

	//Checksum
	$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&message=" . $message . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
		"&orderType=" . $orderType . "&partnerCode=" . $partnerCode . "&payType=" . $payType . "&payType=" . $payType . "&requestId=" . $requestId . "&responseTime=" . $responseTime .
		"&resultCode=" . $resultCode . "&transId=" . $transId;

	$partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);

	echo "<script>console.log('Debug huhu Objects: " . $rawHash . "' );</script>";
	echo "<script>console.log('Debug huhu Objects: " . $partnerSignature . "' );</script>";

	if ($resultCode == '0') {
		$result = '<div class="alert alert-success"><strong>Payment status: </strong>Success</div>';
	} else {
		$result = '<div class="alert alert-danger"><strong>Payment status: </strong>' . $message . '</div>';
	}

	/*if ($m2signature == $partnerSignature) {
		if ($errorCode == '0') {
			$result = '<div class="alert alert-success"><strong>Payment status: </strong>Success</div>';
		} else {
			$result = '<div class="alert alert-danger"><strong>Payment status: </strong>' . $message .'/'.$localMessage. '</div>';
		}
	} else {
		$result = '<div class="alert alert-danger">This transaction could be hacked, please check your signature and returned signature</div>';
	}*/
}

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
									<div class="col-md-12">
										<?php echo $result; ?>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<a href="https://hoabinhairlines.vn/thanh-toan" class="btn btn-primary">Back to continue payment...</a>
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
