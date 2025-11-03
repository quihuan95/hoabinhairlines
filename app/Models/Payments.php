<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Request;
class Payments extends Model
{
	public static function getResponseDescription($responseCode){
			switch ($responseCode) {
			case "0" :
				$result = "Transaction Successful";
				break;
			case "?" :
				$result = "Transaction status is unknown";
				break;
			case "1" :
				$result = "Bank system reject";
				break;
			case "2" :
				$result = "Bank Declined Transaction";
				break;
			case "3" :
				$result = "No Reply from Bank";
				break;
			case "4" :
				$result = "Expired Card";
				break;
			case "5" :
				$result = "Insufficient funds";
				break;
			case "6" :
				$result = "Error Communicating with Bank";
				break;
			case "7" :
				$result = "Payment Server System Error";
				break;
			case "8" :
				$result = "Transaction Type Not Supported";
				break;
			case "9" :
				$result = "Bank declined transaction (Do not contact Bank)";
				break;
			case "A" :
				$result = "Transaction Aborted";
				break;
			case "C" :
				$result = "Transaction Cancelled";
				break;
			case "D" :
				$result = "Deferred transaction has been received and is awaiting processing";
				break;
			case "F" :
				$result = "3D Secure Authentication failed";
				break;
			case "I" :
				$result = "Card Security Code verification failed";
				break;
			case "L" :
				$result = "Shopping Transaction Locked (Please try the transaction again later)";
				break;
			case "N" :
				$result = "Cardholder is not enrolled in Authentication scheme";
				break;
			case "P" :
				$result = "Transaction has been received by the Payment Adaptor and is being processed";
				break;
			case "R" :
				$result = "Transaction was not processed - Reached limit of retry attempts allowed";
				break;
			case "S" :
				$result = "Duplicate SessionID (OrderInfo)";
				break;
			case "T" :
				$result = "Address Verification Failed";
				break;
			case "U" :
				$result = "Card Security Code Failed";
				break;
			case "V" :
				$result = "Address Verification and Card Security Code Failed";
				break;
			case "99" :
				$result = "User Cancel";
				break;
			case "-1" :
				$result = "Unpaid";
			break;
			default  :
				$result = "Unable to be determined";
		}
		return $result;
	}

	// If input is null, returns string "No Value Returned", else returns input
	public static function null2unknown($data)
	{
		if ($data == "") {
			return "No Value Returned";
		} else {
			return $data;
		}
	}
	
	public static function getCasesPayment($ver){
		switch ($ver) {
			case "1_1," :
				$result = "800.000đ - Đại biểu là hội viên trên 24 tháng - Tham dự trực tiếp";
				break;
			case "2_1," :
				$result = "900.000đ - Đại biểu là hội viên dưới 24 tháng - Tham dự trực tiếp";
				break;
			case "3_1," :
				$result = "1.600.000đ - Đại biểu thuộc các trường hợp khác - Tham dự trực tiếp";
				break;
			case "1_2," :
				$result = "600.000đ - Đại biểu là hội viên trên 24 tháng - Tham dự trực tuyến";
				break;
			case "2_2," :
				$result = "700.000đ - Đại biểu là hội viên dưới 24 tháng - Tham dự trực tuyến";
				break;
			case "3_2," :
				$result = "1.200.000đ - Đại biểu thuộc các trường hợp khác - Tham dự trực tuyến";
				break;    
			case "1_3," :
				$result = "1.100.000đ - Đại biểu là hội viên trên 24 tháng - Tham dự trực tiếp & trực tuyến";
				break;
			case "2_3," :
				$result = "1.200.000đ - Đại biểu là hội viên dưới 24 tháng - Tham dự trực tiếp & trực tuyến";
				break;
			case "3_3," :
				$result = "2.200.000đ - Đại biểu thuộc các trường hợp khác - Tham dự trực tiếp & trực tuyến";
				break;        
			default  :
				$result = "Unable to be determined";
		}
		return $result;
	}

	public static function getCasesPaymentEn($ver){
		switch ($ver) {
			case "4_1," :
				$result = "On-site Participation | 350.00 USD";
				break;
			case "4_2," :
				$result = "Online Participation | 200.00 USD";
				break;
			case "4_3," :
				$result = "Both | 450.00 USD";
				break;
			default  :
				$result = "Unable to be determined";
		}
		return $result;
	}

	public static function getCasesPaymentMembers($ver){
		$result='';
		$mang = explode(',',$ver);
		$j=0;
		foreach($mang as $k => $v)
		{
			$j++;
			if($v=='1_1'){ $result.='2020 - 300,000đ | '; }
			else if($v=='2_1'){ $result.='2021 - 300,000đ | '; }
			else if($v=='3_1'){ $result.='2022 - 300,000đ | '; }
			else if($v=='4_1'){ $result.='2023 - 300,000đ | '; }
			else{ $result.=''; }
		}
		return $result;
	}
	
	public static function execPostRequest($url, $data)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($data))
		);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		//execute post
		$result = curl_exec($ch);
		//close connection
		curl_close($ch);
		return $result;
	}
	
	public static function fnRenderStatusVNPAY($vpc_OrderInfo){
		$oneVNP=DB::table('payments_vnpay')->where('vpc_OrderInfo',$vpc_OrderInfo)->first();
		return $oneVNP->status;
	}
	
	public static function vnp_TxnRef_check($vpc_OrderInfo,$vnp_TxnRef){
		$oneVNP=DB::table('payments_vnpay')->where('vpc_OrderInfo',$vpc_OrderInfo)->first();
		if($oneVNP->vnp_TxnRef!=$vnp_TxnRef){
			return '1';
		}
		return '0';
	}
	public static function vnp_Amount_check($vpc_OrderInfo,$vnp_Amount){
		$oneVNP=DB::table('payments_vnpay')->where('vpc_OrderInfo',$vpc_OrderInfo)->first();
		if($oneVNP->fee!=$vnp_Amount){
			return '1';
		}
		return '0';
	}
	
	public static function vnp_SecureHash_check($vpc_OrderInfo,$vnp_SecureHash){
		$oneVNP=DB::table('payments_vnpay')->where('vpc_OrderInfo',$vpc_OrderInfo)->first();
		if($oneVNP->vnp_SecureHash!=$vnp_SecureHash){
			return '1';
		}
		return '0';
	}
	
	public static function fnUpdateStatusPaymentVNPAY($vpc_OrderInfo){
		DB::table('payments_vnpay')->where('vpc_OrderInfo',$vpc_OrderInfo)->update([
			'status'=>'N'
		]);
	}
	
	public static function fnUpdateStatusVNPAY($vpc_OrderInfo,$vnp_ResponseCode){
		$response='';
		if($vnp_ResponseCode=='00'){
			$response='Confirm Success';
		}else if($vnp_ResponseCode=='99'){
			$response='Transaction failed';
		}
		else if($vnp_ResponseCode=='97'){
			$response='Invalid Checksum';
		}
		else if($vnp_ResponseCode=='04'){
			$response='Invalid amount';
		}
		else if($vnp_ResponseCode=='02'){
			$response='Order already confirmed';
		}
		else if($vnp_ResponseCode=='01'){
			$response='Order Not Found';
		}

		DB::table('payments_vnpay')->where('vpc_OrderInfo',$vpc_OrderInfo)->update([
			'status'=>'N',
			'txn'=>$vnp_ResponseCode,
			'response'=>$response
		]);
	}

}
