<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Mail;
use App\Models\Menus;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Models\Payments;

class HomeController extends Controller
{
	//
	public function index(){
		$banners=DB::table('banners')->where('status','1')->orderBy('orders','asc')->get();
		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		$news_spec=DB::table('news')->where('status','1')->where('fk_cat','1')->where('id','!=','11')->take(10)->orderBy('id','desc')->get();
		$news_banner=DB::table('news')->where('status','1')->where('fk_cat','1')->take(4)->orderBy('id','desc')->get();
		$title=$config->title;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords=$config->keywords;
		$description=$config->description;
		return view("pages.home",compact('banners','title','canonical','og_image','keywords','description','news_banner','news_spec'));
	}
	public function index2(){
		$banners=DB::table('banners')->where('status','1')->orderBy('orders','asc')->get();
		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		$news_spec=DB::table('news')->where('status','1')->where('fk_cat','1')->where('id','!=','11')->take(10)->orderBy('id','desc')->get();
		$title=$config->title;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords=$config->keywords;
		$description=$config->description;
		return view("pages.home",compact('banners','title','canonical','og_image','keywords','description','news_spec'));
	}
	public function about_us(){
		$fmenu=DB::table("menus")->where('slug','gioi-thieu')->where('status','1')->first();
		$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
		$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
		$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';

		return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
	}
	public function trang_demo(){
		$fdata=DB::table('payments')->where('vpc_OrderInfo','1768168110')->first();
		//dd($fdata);
		$data=array();
		$data['fullname']=$fdata->fullname;
		$data['email']=$fdata->email;
		$data['phone']=$fdata->phone;
		$data['orderID']=$fdata->orderID;
		$data['vpc_OrderInfo']=$fdata->vpc_OrderInfo;
		$data['fee']=$fdata->fee;
		$data['notes']=$fdata->notes;
		$data['pay']=$fdata->pay;
		$data['txn']=$fdata->txn;
		$data['response']=$fdata->response;
		$data['created_at']=$fdata->created_at;
		$data['status']=$fdata->status;
		$data['re_email']=$fdata->re_email;
		
		
		$to_name = "HoabinhAirlines.Vn";
		$to_email = "lethanh376@gmail.com";//"ticket1@hoabinhtourist.com";//trim($request->txtEmail);
		Mail::send('email.registration',$data,function($message) use ($to_name,$to_email){
			$message->to($to_email)
			->subject("Thông báo thanh toán từ HoabinhAirlines #".rand());
			$message->from($to_email,$to_name);
		});
		echo 'OK';
		//return view("trangdemo");
	}
	public function upload_files(){
		return view("pages.upload_files");
	}
	public function book_tour(Request $request){
		$data=array();
		$data["fullname"]=$request->name;
		$data["phone"]=$request->tel;
		$data["email"]=$request->email;
		$data["date"]=$request->start_date;
		$data["num"]=$request->num_people;
		$data["types"]='2';
		$data["status"]='A';
		$data["create_at"]=Carbon::now();
		DB::table('contacts')->insert($data);
		return Redirect::to('https://hoabinhairlines.vn/confirm');
	}
	public function flight(){
		$title='Tìm kiếm vé máy bay';
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords='';
		$description='Tìm kiếm vé máy bay';
		


		return view("pages.flight",compact('title','canonical','og_image','keywords','description'));
	}
	public function payments(Request $request){
		// -------- Begin Pay --------
		$total=$request->txtSotien;
		$arrRep=array(',','.',' ');
		$fee=str_replace($arrRep,'',$total);
		
			/*$strSecure_secret='2A15C553DC9DBC44284A2020DD489C42';
			$_POST['Title']="VPC 3-Party";
			$_POST['virtualPaymentClientURL']="https://onepay.vn/vpcpay/vpcpay.op";
			$_POST['vpc_Merchant']="HBTOUR2";
			$_POST['vpc_AccessCode']="37A07C2E";
			$_POST['vpc_MerchTxnRef']=rand();
			$_POST['vpc_ReturnURL']="https://hoabinhairlines.vn/dr";
			$_POST['vpc_Version']="2";
			$_POST['vpc_Command']="pay";
			$_POST['vpc_Locale']="vi";
			$_POST['vpc_TicketNo']=$_SERVER['REMOTE_ADDR'];
			$_POST['vpc_SHIP_Street01']="39A Ngo Quyen";
			$_POST['vpc_SHIP_Provice']="Hoan Kiem";
			$_POST['vpc_SHIP_City']="Ha Noi";
			$_POST['vpc_SHIP_Country']="Viet Nam";
			$_POST['vpc_Customer_Phone']="0914929911";
			$_POST['vpc_Customer_Email']="webmaster@hoabinhtourist.com";
			$_POST['vpc_Customer_Id']="thanhls";*/
			
			$_POST['Title']="VPC 3-Party";
			$_POST['virtualPaymentClientURL']="https://onepay.vn/vpcpay/vpcpay.op";
			$_POST['vpc_Merchant']="HBTOUR2";
			$_POST['vpc_AccessCode']="37A07C2E";
			$_POST['vpc_MerchTxnRef']=date('YmdHis').rand();
			$_POST['vpc_ReturnURL']="https://hoabinhairlines.vn/dr";
			$_POST['vpc_Version']="2";
			$_POST['vpc_Command']="pay";
			$_POST['vpc_Locale']="en";
			$_POST['vpc_TicketNo']=$_SERVER['REMOTE_ADDR'];
			$_POST['vpc_SHIP_Street01']="39A Ngo Quyen";
			$_POST['vpc_SHIP_Provice']="Hoan Kiem";
			$_POST['vpc_SHIP_City']="Ha Noi";
			$_POST['vpc_SHIP_Country']="Viet Nam";
			$_POST['vpc_Customer_Phone']="0914929911";
			$_POST['vpc_Customer_Email']="webmaster@hoabinhtourist.com";
			$_POST['vpc_Customer_Id']="thanhls";
		
		/*if($request->pay=='ONLINE'){
			$_POST['vpc_Amount'] = ($fee+($fee*5)/100)*100;
		}else{
			$_POST['vpc_Amount'] = $fee*100;
		}*/
		$_POST['vpc_Amount'] = ($fee+($fee*5)/100)*100;
		// -------- End Pay --------
		
		$_POST['vpc_OrderInfo']=rand();
		$pay="online";
		
		$data=array();
		$data["fullname"]=$request->txtHoten;
		$data["email"]=$request->txtEmail;
		$data["phone"]=$request->txtDidong;
		$data["orderID"]=$request->txtMadonhang;
		$data["vpc_OrderInfo"]=$_POST['vpc_OrderInfo'];
		$data["fee"]=$fee;
		$data["notes"]=$request->txtghichu;
		$data["pay"]="online";
		$data["txn"]="-1";
		$data["response"]="";
		$data["created_at"]=Carbon::now();
		$data["status"]="A";
		$data["re_email"]="N";
		DB::table('payments')->insert($data);
		
			if($pay=="online"){
				$_POST['_token']="";
				$_POST['txtHoten']="";
				$_POST['txtEmail']="";
				$_POST['txtDidong']="";
				$_POST['orderID']="";
				$_POST['txtMadonhang']="";
				$_POST['txtSotien']="";
				$_POST['txtghichu']="";
				$_POST['pay']="";
				//$txnResponseCode = Payments::null2unknown(0);
				/*echo '<pre>';
				print_r($txnResponseCode);
				echo '</pre>';
				die();*/
				
				// $SECURE_SECRET = "secure-hash-secret";
				$SECURE_SECRET = "2A15C553DC9DBC44284A2020DD489C42";
				
				// add the start of the vpcURL querystring parameters
				$vpcURL = $_POST["virtualPaymentClientURL"] . "?";
				// do not want to send these fields to the Virtual Payment Client.
				unset($_POST["virtualPaymentClientURL"]);
				// Get and URL Encode the AgainLink. Add the AgainLink to the array
				// Shows how a user field (such as application SessionIDs) could be added
				$_POST['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
				//$md5HashData = $SECURE_SECRET; Khởi tạo chuỗi dữ liệu mã hóa trống
				$md5HashData = "";
				ksort($_POST);
				// set a parameter to show the first pair in the URL
				$appendAmp = 0;
				foreach($_POST as $key => $value) {
					// create the md5 input and URL leaving out any fields that have no value
					if (strlen($value) > 0) {
						// this ensures the first paramter of the URL is preceded by the '?' char
						if ($appendAmp == 0) {
							$vpcURL .= urlencode($key) . '=' . urlencode($value);
							$appendAmp = 1;
						} else {
							$vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
						}
						//$md5HashData .= $value; sử dụng cả tên và giá trị tham số để mã hóa
						if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
							$md5HashData .= $key . "=" . $value . "&";
						}
					}
				}
				//xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa
				$md5HashData = rtrim($md5HashData, "&");
				// Create the secure hash and append it to the Virtual Payment Client Data if
				// the merchant secret has been provided.
				if (strlen($SECURE_SECRET) > 0) {
					//$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));
					// Thay hàm mã hóa dữ liệu
					$vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)));
				}
				
				// FINISH TRANSACTION - Redirect the customers using the Digital Order
				// ===================================================================
				//header("Location: ".$vpcURL);
				
				return Redirect::to($vpcURL);
			}
	}
	
	public function dr_post(Request $request){
		$SECURE_SECRET = "2A15C553DC9DBC44284A2020DD489C42";
		// get and remove the vpc_TxnResponseCode code from the response fields as we
		// do not want to include this field in the hash calculation
		$vpc_Txn_Secure_Hash = $request->vpc_SecureHash;
		$vpc_MerchTxnRef = $request->vpc_MerchTxnRef;
		$vpc_AcqResponseCode = $request->vpc_AcqResponseCode;
		unset($request->vpc_SecureHash);
		// set a flag to indicate if hash has been validated
		$errorExists = false;
		if (strlen($SECURE_SECRET) > 0 && $request->vpc_TxnResponseCode != "7" && $request->vpc_TxnResponseCode != "No Value Returned") {
		ksort($_GET);
		//$md5HashData = $SECURE_SECRET;
		//khởi tạo chuỗi mã hóa rỗng
		$md5HashData = "";
		// sort all the incoming vpc response fields and leave out any with no value
		foreach ($_GET as $key => $value) {
	//        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
	//            $md5HashData .= $value;
	//        }
	//      chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về
			if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
				$md5HashData .= $key . "=" . $value . "&";
			}
		}
	//  Xóa dấu & thừa cuối chuỗi dữ liệu
		$md5HashData = rtrim($md5HashData, "&");
	
	//    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $md5HashData ) )) {
	//    Thay hàm tạo chuỗi mã hóa
		if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)))) {
			// Secure Hash validation succeeded, add a data field to be displayed
			// later.
			$hashValidated = "CORRECT";
		} else {
			// Secure Hash validation failed, add a data field to be displayed
			// later.
			$hashValidated = "INVALID HASH";
		}
	} else {
		// Secure Hash was not validated, add a data field to be displayed later.
		$hashValidated = "INVALID HASH";
	}
	
		// Define Variables
		// ----------------
		// Extract the available receipt fields from the VPC Response
		// If not present then let the value be equal to 'No Value Returned'
	
		// Standard Receipt Data
	
		$vpc_Amount_1=isset($_GET["vpc_BatchNo"])==true?$_GET["vpc_BatchNo"]:'';
		$vpc_Locale_1=isset($_GET["vpc_Locale"])==true?$_GET["vpc_Locale"]:'';
		$vpc_BatchNo_1=isset($_GET["vpc_BatchNo"])==true?$_GET["vpc_BatchNo"]:'';
		$vpc_Command_1=isset($_GET["vpc_Command"])==true?$_GET["vpc_Command"]:'';
		$vpc_Message_1=isset($_GET["vpc_Message"])==true?$_GET["vpc_Message"]:'';
		$vpc_Version_1=isset($_GET["vpc_Version"])==true?$_GET["vpc_Version"]:'';
		$vpc_Card_1=isset($_GET["vpc_Card"])==true?$_GET["vpc_Card"]:'';
		$vpc_OrderInfo_1=isset($_GET["vpc_OrderInfo"])==true?$_GET["vpc_OrderInfo"]:'';
		$vpc_ReceiptNo_1=isset($_GET["vpc_ReceiptNo"])==true?$_GET["vpc_ReceiptNo"]:'';
		$vpc_Merchant_1=isset($_GET["vpc_Merchant"])==true?$_GET["vpc_Merchant"]:'';
		$vpc_MerchTxnRef_1=isset($_GET["vpc_MerchTxnRef"])==true?$_GET["vpc_MerchTxnRef"]:'';
		$vpc_TransactionNo_1=isset($_GET["vpc_TransactionNo"])==true?$_GET["vpc_TransactionNo"]:'';
		$vpc_AcqResponseCode_1=isset($_GET["vpc_AcqResponseCode"])==true?$_GET["vpc_AcqResponseCode"]:'';
		$vpc_TxnResponseCode_1=isset($_GET["vpc_TxnResponseCode"])==true?$_GET["vpc_TxnResponseCode"]:'';
	
		$amount = Payments::null2unknown($vpc_Amount_1);
		$locale = Payments::null2unknown($vpc_Locale_1);
		$batchNo = Payments::null2unknown($vpc_BatchNo_1);
		$command = Payments::null2unknown($vpc_Command_1);
		$message = Payments::null2unknown($vpc_Message_1);
		$version = Payments::null2unknown($vpc_Version_1);
		$cardType = Payments::null2unknown($vpc_Card_1);
		$orderInfo = Payments::null2unknown($vpc_OrderInfo_1);
		$receiptNo = Payments::null2unknown($vpc_ReceiptNo_1);
		$merchantID = Payments::null2unknown($vpc_Merchant_1);
		$merchTxnRef = Payments::null2unknown($vpc_MerchTxnRef_1);
		$transactionNo = Payments::null2unknown($vpc_TransactionNo_1);
		$acqResponseCode = Payments::null2unknown($vpc_AcqResponseCode_1);
		$txnResponseCode = Payments::null2unknown($vpc_TxnResponseCode_1);
		// 3-D Secure Data
		$verType = array_key_exists("vpc_VerType", $_GET) ? $_GET["vpc_VerType"] : "No Value Returned";
		$verStatus = array_key_exists("vpc_VerStatus", $_GET) ? $_GET["vpc_VerStatus"] : "No Value Returned";
		$token = array_key_exists("vpc_VerToken", $_GET) ? $_GET["vpc_VerToken"] : "No Value Returned";
		$verSecurLevel = array_key_exists("vpc_VerSecurityLevel", $_GET) ? $_GET["vpc_VerSecurityLevel"] : "No Value Returned";
		$enrolled = array_key_exists("vpc_3DSenrolled", $_GET) ? $_GET["vpc_3DSenrolled"] : "No Value Returned";
		$xid = array_key_exists("vpc_3DSXID", $_GET) ? $_GET["vpc_3DSXID"] : "No Value Returned";
		$acqECI = array_key_exists("vpc_3DSECI", $_GET) ? $_GET["vpc_3DSECI"] : "No Value Returned";
		$authStatus = array_key_exists("vpc_3DSstatus", $_GET) ? $_GET["vpc_3DSstatus"] : "No Value Returned";
	
		// *******************
		// END OF MAIN PROGRAM
		// *******************
	
		// FINISH TRANSACTION - Process the VPC Response Data
		// =====================================================
		// For the purposes of demonstration, we simply display the Result fields on a
		// web page.
	
		// Show 'Error' in title if an error condition
		$errorTxt = "";
	
		// Show this page as an error page if vpc_TxnResponseCode equals '7'
		if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
			$errorTxt = "Error ";
		}
	
		// This is the display title for 'Receipt' page
		$title = $_GET["Title"];
	
		// The URL link for the receipt to do another transaction.
		// Note: This is ONLY used for this example and is not required for
		// production code. You would hard code your own URL into your application
		// to allow customers to try another transaction.
		//TK//$againLink = URLDecode($_GET["AgainLink"]);
	
	
		$transStatus = "";
		if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
			$transStatus = "Payment Success!";
		}elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
			$transStatus = "Pendding";
		}else {
			$transStatus = "Payment Failed";
		}
	
	
	
		$fdata = DB::table('payments')->where('vpc_OrderInfo',$orderInfo)->first();
		if(!empty($fdata)){
			$strResponse=Payments::getResponseDescription($txnResponseCode);
	
		   /* $data=array();
		   $data["fullname"]=$fdata->fullname;
		   $data["email"]=$fdata->email;
		   $data["phone"]=$fdata->phone;
		   $data["orderID"]=$fdata->orderID;
		   $data["vpc_OrderInfo"]=$fdata->vpc_OrderInfo;
		   $data["fee"]=$fdata->fee;
		   $data["notes"]=$fdata->notes;
		   $data["pay"]=$fdata->pay;
		   $data["txt"]=$fdata->txt;
		   $data["response"]=$fdata->response;*/
	
			// -- Send Email
			/*$to_name = "Xác nhận thanh toán đơn hàng #".$fdata->orderID;
			$to_email = trim($fdata->email);
			Mail::send('email.reg_online',$data,function($message) use ($to_name,$to_email){
				$message->to($to_email)
				->subject("Xác nhận thanh toán đơn hàng #".$fdata->orderID);
				$message->from($to_email,$to_name);
			});*/
			// -- End Send Email
			DB::table('payments')->where('id',$fdata->id)->update(['response'=>$strResponse,'txn'=>$txnResponseCode,'re_email'=>'A']);
			return Redirect::to(route('registration.confirm',array($orderInfo)));
		}
	}
	public function registration_confirm($orderinfo){
		$fdata=DB::table('payments')->where('vpc_OrderInfo',$orderinfo)->first();
		
		$title='Thông tin phản hồi thanh toán từ Hòa Bình Airlines';
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords='';
		$description='Thông tin phản hồi thanh toán từ Hòa Bình Airlines';
		
		return view("pages.confirm",compact('fdata','title','canonical','og_image','keywords','description'));
	}
	function registration_confirm_momo_pay($orderinfo){
		$fdata=DB::table('payments')->where('vpc_OrderInfo',$orderinfo)->first();
		
		$title='Thông tin phản hồi thanh toán từ Hòa Bình Airlines';
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords='';
		$description='Thông tin phản hồi thanh toán từ Hòa Bình Airlines';
		
		$txnResponseCode=$_GET["resultCode"];
		$strResponse=$_GET["message"];
		
		//$fdata[]=$txnResponseCode;
		// -- Send Email
		/*$to_name = "HoabinhAirlines.Vn";
		$to_email = "ticket1@hoabinhtourist.com";//trim($request->txtEmail);
		Mail::send('email.registration',$fdata,function($message) use ($to_name,$to_email){
			$message->to($to_email)
			->subject("Thông báo thanh toán từ HoabinhAirlines #".rand());
			$message->from($to_email,$to_name);
		});*/
		// -- End Send Email
		
		//$fdata=DB::table('payments')->where('vpc_OrderInfo','1768168110')->first();
		//dd($fdata);
		$data=array();
		$data['fullname']=$fdata->fullname;
		$data['email']=$fdata->email;
		$data['phone']=$fdata->phone;
		$data['orderID']=$fdata->orderID;
		$data['vpc_OrderInfo']=$fdata->vpc_OrderInfo;
		$data['fee']=$fdata->fee;
		$data['notes']=$fdata->notes;
		$data['pay']=$fdata->pay;
		$data['txn']=$txnResponseCode;
		$data['response']=$strResponse;
		$data['created_at']=$fdata->created_at;
		$data['status']=$fdata->status;
		$data['re_email']=$fdata->re_email;
		
		
		$to_name = "HoabinhAirlines.Vn";
		$to_email = "ticket1@hoabinhtourist.com";//"ticket1@hoabinhtourist.com";//trim($request->txtEmail);
		Mail::send('email.registration',$data,function($message) use ($to_name,$to_email){
			$message->to($to_email)
			->cc('lethanh376@gmail.com')
			->cc('vemaybay@hoabinhtourist.com')
			->subject("Thông báo thanh toán từ HoabinhAirlines #".rand());
			$message->from($to_email,$to_name);
		});
		
		DB::table('payments')->where('id',$fdata->id)->update(['response'=>$strResponse,'txn'=>$txnResponseCode,'re_email'=>'A']);
		
		return view("pages.confirm_momo",compact('fdata','title','canonical','og_image','keywords','description'));
	}
	
	function registration_confirm_vnpay(){
		$vnp_TmnCode = "FUKCRYHY"; //Website ID in VNPAY System
		$vnp_HashSecret = "GAMIJAGWTXJPVNRDQWBTOQYKIAKMSEOI"; //Secret key
		$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
		$vnp_Returnurl = "https://hoabinhairlines.vn/confirm-vnpay";
		$vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
		
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
		
		/*
		$arr_response=array();
		$arr_response['madonhang']=$_GET['vnp_TxnRef'];
		$arr_response['vnp_Amount']=$_GET['vnp_Amount'];
		$arr_response['vnp_OrderInfo']=$_GET['vnp_OrderInfo'];
		$arr_response['vnp_ResponseCode']=$_GET['vnp_ResponseCode'];
		$arr_response['vnp_TransactionNo']=$_GET['vnp_TransactionNo'];
		$arr_response['vnp_BankCode']=$_GET['vnp_BankCode'];
		$arr_response['vnp_PayDate']=$_GET['vnp_PayDate'];
		if ($secureHash == $vnp_SecureHash) {
			if ($_GET['vnp_ResponseCode'] == '00') {
				$arr_response['result']="<span style='color:blue'>Giao dịch thành công</span>";
			}else{
				$arr_response['result']="<span style='color:red'>Giao dịch không thành công</span>";
			}
		}else{
			$arr_response['result']="<span style='color:red'>Chữ ký không hợp lệ</span>";
		}
		*/
		
		
		$title='Thông tin phản hồi thanh toán từ Hòa Bình Airlines';
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords='';
		$description='Thông tin phản hồi thanh toán từ Hòa Bình Airlines';
		///<!------------------------------------------->
		
		/*$fdata=DB::table('payments_vnpay')->where('vpc_OrderInfo',$_GET['vnp_OrderInfo'])->first();
		
		$strResponse='';
		$txnResponseCode=$_GET['vnp_ResponseCode'];
		if ($secureHash == $vnp_SecureHash) {
			if ($_GET['vnp_ResponseCode'] == '00') {
				$strResponse="Confirm Success";
			}else{
				$strResponse="Payment Failed";
			}
		}else{
			$strResponse="Invalid Checksum";
		}
		
		if($_GET['vnp_TxnRef']!=$fdata->vnp_TxnRef){
			$txnResponseCode='01';
			$strResponse="Order Not Found";
		}
		if($_GET['vnp_Amount']!=$fdata->fee){
			$txnResponseCode='04';
			$strResponse="Invalid amount";
		}
		if($_GET['vnp_SecureHash']!=$fdata->vnp_SecureHash){
			$txnResponseCode='97';
			$strResponse="Invalid Checksum";
		}
		
		
		DB::table('payments_vnpay')->where('id',$fdata->id)->update(['response'=>$strResponse,'txn'=>$txnResponseCode]);
		
		$fdata2=DB::table('payments_vnpay')->where('vpc_OrderInfo',$_GET['vnp_OrderInfo'])->first();*/
		
		return view('pages.confirm_vnpay',compact('title','canonical','og_image','keywords','description'));
	}
	
	public function payment_momo(Request $request){
		if(($request->txtEmail=='Thanhha342@gmail.com') || ($request->txtDidong=='0399779799')){
			echo '<div style="width: 100%;margin-top: 150px;z-index: 9999;text-align:center;"><img alt="arrow" src="https://hoabinhairlines.vn/public/frontend/ajax-loader.gif" /></div>';
			die();
		}
		$total=$request->txtSotien;
		$arrRep=array(',','.',' ');
		$fee=str_replace($arrRep,'',$total);
		
		$endpoint = "https://payment.momo.vn/v2/gateway/api/create";
		
		$partnerCode = 'MOMOHD8E20220428';//MOMOBKUN20180529
		$accessKey = 'WIj5mZ7sGAgMhNd7';//klm05TvNBzhg7h7j
		$serectkey = 'OKq4ch02vuqIiea69ikKlNTKv2g6KNO3';//at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa
		$orderInfo = "HoaBinhAirlines-".rand();//"Thanh toán qua MoMo";
		$amount = $fee;
		$orderId = rand() ."";
		$redirectUrl = "https://hoabinhairlines.vn/confirm-momo-pay/".$orderId;
		$ipnUrl = "https://hoabinhairlines.vn/confirm-momo-pay/".$orderId;//"https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
		$extraData = "";
		$_POST["extraData"]="";
		
		$requestId = rand() . "";
		$requestType = "captureWallet";
		$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
		//before sign HMAC SHA256 signature
		$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
		$signature = hash_hmac("sha256", $rawHash, $serectkey);
		$data = array('partnerCode' => $partnerCode,
			'partnerName' => "HoaBinhAirlines",
			"storeId" => "MomoHoaBinhAirlines",
			'requestId' => $requestId,
			'amount' => $amount,
			'orderId' => $orderId,
			'orderInfo' => $orderInfo,
			'redirectUrl' => $redirectUrl,
			'ipnUrl' => $ipnUrl,
			'lang' => 'vi',
			'extraData' => $extraData,
			'requestType' => $requestType,
			'signature' => $signature);
			$result = Payments::execPostRequest($endpoint, json_encode($data));
			
		$jsonResult = json_decode($result, true);  // decode json
		
		$data=array();
		$data['fullname']=$request->txtHoten;
		$data['email']=$request->txtEmail;
		$data['phone']=$request->txtDidong;
		$data['orderID']=$request->txtMadonhang;
		$data['vpc_OrderInfo']=$orderId;
		$data['fee']=$fee;
		$data['notes']=$request->txtghichu;
		$data['pay']="momo";
		$data['txn']="-1";
		$data['response']="";
		$data['created_at']=Carbon::now();
		$data['status']="A";
		$data['re_email']="N";
		DB::table('payments')->insert($data);

		return Redirect::to($jsonResult['payUrl']);
	}
	public function payment_vnpay(Request $request){
		$vnp_TmnCode = "FUKCRYHY"; //Website ID in VNPAY System
		$vnp_HashSecret = "GAMIJAGWTXJPVNRDQWBTOQYKIAKMSEOI"; //Secret key
		$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
		$vnp_Returnurl = "https://hoabinhairlines.vn/confirm-vnpay";
		$vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
		//Expire
		$startTime = date("YmdHis");
		$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
		///<!------------------------------------------->
		$vnp_TxnRef = date("YmdHis");//$_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
		$vnp_OrderInfo = rand();//'ThanhToanQuaCongVNPAY';//$_POST['order_desc'];
		$vnp_OrderType = 'billpayment';//$_POST['order_type'];
		$vnp_Amount = $_POST['txtSotien'] * 100;
		$vnp_Locale = 'vn';//$_POST['language'];
		$vnp_BankCode = '';//$_POST['bank_code'];
		$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
		//Add Params of 2.0.1 Version
		$vnp_ExpireDate = $expire;//$_POST['txtexpire'];
		//Billing
		$vnp_Bill_Mobile = $_POST['txtDidong'];//$_POST['txt_billing_mobile'];
		$vnp_Bill_Email = $_POST['txtEmail'];//$_POST['txt_billing_email'];
		$fullName = $_POST['txtHoten'];//trim($_POST['txt_billing_fullname']);
		if (isset($fullName) && trim($fullName) != '') {
			$name = explode(' ', $fullName);
			$vnp_Bill_FirstName = array_shift($name);
			$vnp_Bill_LastName = array_pop($name);
		}
		$vnp_Bill_Address=$_POST['txtDiachi'];
		$vnp_Bill_City='Hà Nội';//$_POST['txt_bill_city'];
		$vnp_Bill_Country='VN';//$_POST['txt_bill_country'];
		$vnp_Bill_State='';//$_POST['txt_bill_state'];
		// Invoice
		$vnp_Inv_Phone=$_POST['txtDidong'];//$_POST['txt_inv_mobile'];
		$vnp_Inv_Email=$_POST['txtEmail'];//$_POST['txt_inv_email'];
		$vnp_Inv_Customer=$_POST['txtHoten'];//$_POST['txt_inv_customer'];
		$vnp_Inv_Address=$_POST['txtDiachi'];//$_POST['txt_inv_addr1'];
		$vnp_Inv_Company='Công ty Cổ phần giải pháp Thanh toán Việt Nam';//$_POST['txt_inv_company'];
		$vnp_Inv_Taxcode='0102182292';//$_POST['txt_inv_taxcode'];
		$vnp_Inv_Type='I';//$_POST['cbo_inv_type'];
		$inputData = array(
			"vnp_Version" => "2.1.0",
			"vnp_TmnCode" => $vnp_TmnCode,
			"vnp_Amount" => $vnp_Amount,
			"vnp_Command" => "pay",
			"vnp_CreateDate" => date('YmdHis'),
			"vnp_CurrCode" => "VND",
			"vnp_IpAddr" => $vnp_IpAddr,
			"vnp_Locale" => $vnp_Locale,
			"vnp_OrderInfo" => $vnp_OrderInfo,
			"vnp_OrderType" => $vnp_OrderType,
			"vnp_ReturnUrl" => $vnp_Returnurl,
			"vnp_TxnRef" => $vnp_TxnRef,
			"vnp_ExpireDate"=>$vnp_ExpireDate,
			"vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
			"vnp_Bill_Email"=>$vnp_Bill_Email,
			"vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
			"vnp_Bill_LastName"=>$vnp_Bill_LastName,
			"vnp_Bill_Address"=>$vnp_Bill_Address,
			"vnp_Bill_City"=>$vnp_Bill_City,
			"vnp_Bill_Country"=>$vnp_Bill_Country,
			"vnp_Inv_Phone"=>$vnp_Inv_Phone,
			"vnp_Inv_Email"=>$vnp_Inv_Email,
			"vnp_Inv_Customer"=>$vnp_Inv_Customer,
			"vnp_Inv_Address"=>$vnp_Inv_Address,
			"vnp_Inv_Company"=>$vnp_Inv_Company,
			"vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
			"vnp_Inv_Type"=>$vnp_Inv_Type
		);
		
		if (isset($vnp_BankCode) && $vnp_BankCode != "") {
			$inputData['vnp_BankCode'] = $vnp_BankCode;
		}
		if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
			$inputData['vnp_Bill_State'] = $vnp_Bill_State;
		}
		
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
			if ($i == 1) {
				$hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
			} else {
				$hashdata .= urlencode($key) . "=" . urlencode($value);
				$i = 1;
			}
			$query .= urlencode($key) . "=" . urlencode($value) . '&';
		}
		
		$vnp_Url = $vnp_Url . "?" . $query;
		
		if (isset($vnp_HashSecret)) {
			$vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
			$vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
		}
		$returnData = array('code' => '00'
			, 'message' => 'success'
			, 'data' => $vnp_Url);
			
			//dd($vnp_Url);
			
		   $data11=array();
			  $data11['fullname']=$request->txtHoten;
			  $data11['email']=$request->txtEmail;
			  $data11['phone']=$request->txtDidong;
			  $data11['orderID']=$request->txtMadonhang;
			  $data11['vpc_OrderInfo']=$vnp_OrderInfo;
			  $data11['vnp_TxnRef']=$vnp_TxnRef;
			  $data11['vnp_SecureHash']=$vnpSecureHash;
			  $data11['fee']=$_POST['txtSotien'];
			  $data11['notes']=$request->txtghichu;
			  $data11['pay']="vnpay";
			  $data11['txn']="-1";
			  $data11['response']="";
			  $data11['created_at']=Carbon::now();
			  $data11['status']="A";
			  $data11['IPNStatus']=0;
			  $data11['re_email']="N";
			  DB::table('payments_vnpay')->insert($data11);
			
			return Redirect::to($vnp_Url);
			/*if (isset($_POST['redirect'])) {
				header('Location: ' . $vnp_Url);
				die();
			} else {
				echo json_encode($returnData);
			}*/
	}
	
	public function vnpay_ipn(){
		/* Payment Notify
		 * IPN URL: Ghi nhận kết quả thanh toán từ VNPAY
		 * Các bước thực hiện:
		 * Kiểm tra checksum 
		 * Tìm giao dịch trong database
		 * Kiểm tra số tiền giữa hai hệ thống
		 * Kiểm tra tình trạng của giao dịch trước khi cập nhật
		 * Cập nhật kết quả vào Database
		 * Trả kết quả ghi nhận lại cho VNPAY
		 */
		
		$vnp_TmnCode = "FUKCRYHY"; //Website ID in VNPAY System
		$vnp_HashSecret = "GAMIJAGWTXJPVNRDQWBTOQYKIAKMSEOI"; //Secret key
		$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
		$vnp_Returnurl = "https://hoabinhairlines.vn/confirm-vnpay";
		$vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
		//Config input format
		//Expire
		$startTime = date("YmdHis");
		$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
		
		$inputData = array();
		$returnData = array();
		foreach ($_GET as $key => $value) {
					if (substr($key, 0, 4) == "vnp_") {
						$inputData[$key] = $value;
					}
				}
		
		$vnp_SecureHash = $inputData['vnp_SecureHash'];
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
		$vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
		$vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
		$vnp_Amount = $inputData['vnp_Amount']/100; // Số tiền thanh toán VNPAY phản hồi
		
		$Status = 0; // Là trạng thái thanh toán của giao dịch chưa có IPN lưu tại hệ thống của merchant chiều khởi tạo URL thanh toán.
		
		//dd($inputData);
		
		$datalog=array();
		$datalog['ip']=\Request::ip();
		$datalog['info']=serialize($inputData);//$strInfo;
		$datalog['create_at']=Carbon::now();
		DB::table('logIP_data_IPN')->insert($datalog);
		
		$orderId = $inputData['vnp_OrderInfo'];
		$vnp_TxnRef = $inputData['vnp_TxnRef'];
		
		//dd($inputData);
		try {
			//Check Orderid    
			//Kiểm tra checksum của dữ liệu
			if ($secureHash == $vnp_SecureHash) {
				//Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId            
				//Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
				//Giả sử: $order = mysqli_fetch_assoc($result);   
				
				$fdata = DB::table('payments_vnpay')->where('vpc_OrderInfo',$orderId)->where('vnp_TxnRef',$vnp_TxnRef)->first();//NULL;$id
				//$order=DB::table('payments_vnpay')->where('vpc_OrderInfo',$orderId)->where('vpc_OrderInfo',$vnp_TxnRef)->first();
				$order=array();
				if ($fdata != NULL) {
					$order["Amount"]=$fdata->fee;
					$order["Status"]=$fdata->IPNStatus;
					$order["Confirm"]=$fdata->status;
					$order["vnp_ResponseCode"]=$fdata->txn;//$inputData['vnp_ResponseCode'];
					$order["vnp_TransactionStatus"]=$inputData['vnp_TransactionStatus'];
					
					if($order["Amount"] == $vnp_Amount) //Kiểm tra số tiền thanh toán của giao dịch: giả sử số tiền kiểm tra là đúng. //$order["Amount"] == $vnp_Amount
					{
					/*if($order["Confirm"]=='N'){
						$returnData['RspCode'] = '02';
						$returnData['Message'] = 'Order already confirmed';
					}else{*/
						
							if ($order["Status"] == 0) {
								//DB::table('payments_vnpay')->where('vpc_OrderInfo',$orderId)->update(['IPNStatus'=>1]);
								$vnp_ResponseCode=$inputData['vnp_ResponseCode'];
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
								
								DB::table('payments_vnpay')->where('vpc_OrderInfo',$orderId)->update([
									'status'=>'N',
									'txn'=>$vnp_ResponseCode,
									'IPNStatus'=>1,
									'response'=>$response
								]);
								
								if ($order['vnp_ResponseCode'] == '00' || $order['vnp_TransactionStatus'] == '00') {
									$Status = 1; // Trạng thái thanh toán thành công
								} else {
									$Status = 2; // Trạng thái thanh toán thất bại / lỗi
								}
								//Cài đặt Code cập nhật kết quả thanh toán, tình trạng đơn hàng vào DB
								//Trả kết quả về cho VNPAY: Website/APP TMĐT ghi nhận yêu cầu thành công                
								$returnData['RspCode'] = '00';
								$returnData['Message'] = 'Confirm Success';
							} else {
								$returnData['RspCode'] = '02';
								$returnData['Message'] = 'Order already confirmed';
							}
					}else {
						$returnData['RspCode'] = '04';
						$returnData['Message'] = 'invalid amount';
					}
				} else {
					$returnData['RspCode'] = '01';
					$returnData['Message'] = 'Order not found';
				}
			} else {
				$returnData['RspCode'] = '97';
				$returnData['Message'] = 'Invalid signature';
			}
		} catch (Exception $e) {
			$returnData['RspCode'] = '99';
			$returnData['Message'] = 'Unknow error';
		}
		
		//Trả lại VNPAY theo định dạng JSON
		echo json_encode($returnData);
	}
	public function search_locals(Request $request){
		$booking = DB::table('booking_review')->where("MaDH",$request->id)->first();//->where("MaDH","LIKE","%".$request->id."%")
		$output='';
		if(!empty($booking)){
			$output.='<div class="order-left-pane">
				<div class="box">
				   <div class="title"><span class="fa fa-phone-square"></span> Thông tin khách hàng</div>
				   <div class="content">
					  <div class="fleft">
						 <table style="width:100%;">
							 <tr>
								 <td style="width:25%;">
									 Liên hệ:
								 </td>
								 <td>
									 '.$booking->LienHe.' 
								 </td>
							 </tr>
							 <tr>
								  <td style="width:25%;">
									  Điện thoại:
								  </td>
								  <td>
									  '.$booking->DienThoai.' 
								  </td>
							  </tr>
							  <tr>
									<td style="width:25%;">
										Tiền tệ:
									</td>
									<td>
										'.$booking->TienTe.' 
									</td>
								</tr>
								<tr>
									<td style="width:25%;">
										Ngày đặt:
									</td>
									<td>
										'.$booking->NgayDat.' 
									</td>
								</tr>
						 </table>
					  </div>
					  <div class="fright">
						 <table style="width:100%;">
							  <tr>
								  <td style="width:25%;">
									  Email:
								  </td>
								  <td>
									  '.$booking->Email.' 
								  </td>
							  </tr>
							  <tr>
								   <td style="width:25%;">
									   Địa chỉ:
								   </td>
								   <td>
									   '.$booking->DiaChi.' 
								   </td>
							   </tr>
							   <tr>
									 <td style="width:25%;">
										 Ngôn ngữ:
									 </td>
									 <td>
										 '.$booking->NgonNgu.' 
									 </td>
								 </tr>
								 <tr>
									 <td style="width:25%;">
										 Địa chỉ IP:
									 </td>
									 <td>
										 '.$booking->IP.' 
									 </td>
								 </tr>
						  </table>
					  </div>
					  <p style="margin:0px;padding:0px;">&nbsp;</p>
					  <p style="margin:5px 0 0 0;padding:5px;">Ghi chú</p>
					  <p style="margin:0px;padding:5px;">'.$booking->GhiChu.'</p>
					  <div class="clear"></div>
					  
				   </div>
				</div>
			</div>';
			echo $output.$booking->BookingInfo.'<p>&nbsp;</p><p>&nbsp;</p>';    
		}else{
			echo '<p style="color:red;font-size:20px;margin-top:20px;">Không tìm thấy đơn hàng đặt bởi mã đơn hàng này, vui lòng kiểm tra lại đơn hàng đã nhập...!</p>';   
		}
	}
	public function email_promotion(Request $request){
		$data=array();
		$data["email"]=$request->email_promotion;
		$data["status"]="A";
		$data["create_at"]=Carbon::now();
		DB::table('email_promotion')->insert($data);
		Session::put('message','Bạn đã đăng ký nhận tin khuyến mãi thành công');
		return Redirect::to('https://hoabinhairlines.vn/');
	}

	public function flight_data(Request $request){
		//$data = Item::select("title as name")->where("title","LIKE","%{$request->input('query')}%")->get();
		$data=DB::table('country')
			->where("title","LIKE","%{$request->input('city_name_go')}%")
			->get();
		return response()->json($data);
	}

	public function ajax_content($id){
		$crewservice = DB::table('country')->where("title","LIKE","%".$id."%")->get();
		$output='';
		foreach($crewservice as $k=>$v)
		{
			$output .= '<p>'.$v->title.'</p>';
		}
		echo $output;
	}

	function getSearchAjax(Request $request)
	{
		if($request->get('query'))
		{
			$query = $request->get('query');
			$data = DB::table('country')
				->where('title', 'LIKE', "%{$query}%")
				->where('country_search', 'LIKE', "%{$query}%")
				->where('data_value', 'LIKE', "%{$query}%")
				->get();
			$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
			$i=0;
			$total=count($data);
			foreach($data as $row)
			{
				$i++;
				$strClass='';
				if($i==$total){ $strClass=' bordernone'; }
				$output .= '<li data-value="'."$row->data_value".'" class="'    .$strClass.'"><a href="#">'.$row->title.'<label class="country-search">'.$row->country_search.'</label><div style="width: 100%;height: 1px;clear: both;"></div></a></li>';
			}
			$output .= '</ul>';
			echo $output;
		}
	}

	/*public function contact(){
		$title='Liên hệ';
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords='';
		$description='Liên hệ - Hòa Bình Airlines';

	 return view("pages.contact",compact('title','canonical','og_image','keywords','description'));
	}*/
	public function thanh_toan(){
		$title="Thanh toán";
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords="thanh toan online, payment";
		$description="Thanh toán";
		return view("pages.thanhtoan",compact('title','canonical','og_image','keywords','description'));
	}
	public function thanh_toan_qua_vi_vnpay(){
		$title="Thanh toán qua ví VNPAY";
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords="thanh toan online, payment, thanh toan vi vnpay";
		$description="Thanh toán";
		return view("pages.thanhtoanquavivnpay",compact('title','canonical','og_image','keywords','description'));
	}
	public function kiem_tra_don_hang(){
		$title="Kiểm tra đơn hàng";
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords="kiem tra don hang, payment";
		$description="Kiểm tra đơn hàng";
		return view("pages.kiemtradonhang",compact('title','canonical','og_image','keywords','description'));
	}
	public function phan_hoi_thanh_toan($orderid){
		
		$title="Phản hồi thanh toán";
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords="phan hoi thanh toan, confirm";
		$description="Phản hồi thanh toán";
		return view("pages.phanhoi",compact('title','canonical','og_image','keywords','description'));
	}
	public function pages($slug){
		$first_pages=DB::table('pages')->where('slug',$slug)->orderBy('id', 'desc')->first();
		if(($slug!="gioi-thieu") && ($slug!="thong-tin-chuyen-khoan") && ($slug!="huong-dan-dat-ve")){
			if(!empty($first_pages)){
				$title=$first_pages->title_seo==''?$first_pages->title:$first_pages->title_seo;
				$canonical=url()->current();
				$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
				$keywords=$first_pages->keyword_seo==''?'':$first_pages->keyword_seo;
				$description=$first_pages->desc_seo==''?$first_pages->title:$first_pages->desc_seo;

				return view("pages.pages",compact('first_pages','title','canonical','og_image','keywords','description'));
			}else{
				return view('errors.404');
			}
		}else{
				return view('errors.404');
			}
	}
	public function vemaybay($slug){
		$fmenu=DB::table("menus")->where('slug',$slug)->where('status','1')->first();
		//$arr=array("ve-may-bay-di-hai-phong","ve-may-bay-di-phu-quoc","ve-may-bay-di-ha-noi","ve-may-bay-di-pleiku","ve-may-bay-di-sai-gon","ve-may-bay-di-tuy-hoa","ve-may-bay-di-phap","ve-may-bay-di-khanh-hoa","ve-may-bay-di-rach-gia","ve-may-bay-di-da-nang","ve-may-bay-di-vinh");

		if(($slug!='ve-may-bay-di-hai-phong') && ($slug!='ve-may-bay-di-phu-quoc') && ($slug!='ve-may-bay-di-ha-noi') && ($slug!='ve-may-bay-di-pleiku') && ($slug!='ve-may-bay-di-sai-gon') && ($slug!='ve-may-bay-di-tuy-hoa') && ($slug!='ve-may-bay-di-phap') && ($slug!='ve-may-bay-di-khanh-hoa') && ($slug!='ve-may-bay-di-rach-gia') && ($slug!='ve-may-bay-di-da-nang')){
			if(!empty($fmenu)){
				$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
				$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
				$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
				$canonical=url()->current();
				$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';

				return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
			}else{
				return view('errors.404');
			}
		}
	}
	public function vemaybaygiare($slug){
		
		/*if($slug=='ve-may-bay-gia-re-hoa-binh-airlines'){
			$fmenu=DB::table("menus")->where('slug',$slug)->where('status','1')->first();
		}else{
			$fmenu=DB::table("menus")->where('slug',$slug)->where('parent_id',"!=",'58')->where('status','1')->first();
		}
		
		if(!empty($fmenu)){
			$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
			$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
			$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
			$canonical=url()->current();
			$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';

			return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
		}else{
			return Redirect::to('https://hoabinhairlines.vn/ve-may-bay-gia-re');
		}*/
		
		return Redirect::to('https://hoabinhairlines.vn/ve-may-bay-gia-re-hoa-binh-airlines.html');
		/*Code cũ đang dùng | */
		/*if($slug=='ve-may-bay-gia-re-hoa-binh-airlines'){
			$fmenu=DB::table("menus")->where('slug',$slug)->where('status','1')->first();
			if(!empty($fmenu)){
				$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
				$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
				$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
				$canonical=url()->current();
				$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
				return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
			}else{
				return view('errors.404');
			}
		}else{
			return view('errors.404');
		}*/
	}
	
	public function ve_may_bay_gia_re_hoa_binh_airlines(){
		$fmenu=DB::table("menus")->where('slug','ve-may-bay-gia-re-hoa-binh-airlines')->where('status','1')->first();
		if(!empty($fmenu)){
			$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
			$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
			$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
			$canonical=url()->current();
			$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
			return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
		}else{
			return view('errors.404');
		}
	}

	public function vevietjetairgiarehba(){
		$fmenu=DB::table("menus")->where('slug','ve-vietjet-air-gia-re-hoa-binh-airlines')->where('status','1')->first();
		if(!empty($fmenu)){
			$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
			$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
			$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
			$canonical=url()->current();
			$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
			return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
		}else{
			return view('errors.404');
		}
	}
	
	public function veBambooAirway($slug){
		return Redirect::to('https://hoabinhairlines.vn/dat-mua-ve-bamboo-airways-gia-cuc-re-tai-hoa-binh-airlines.html');
	}
	
	public function vevietnamairline($slug){
		return Redirect::to('https://hoabinhairlines.vn/dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines.html');
		//code cũ đang dùng
		/*if($slug=='dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines'){
			$fmenu=DB::table("menus")->where('slug',$slug)->where('status','1')->first();
			if(!empty($fmenu)){
				$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
				$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
				$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
				$canonical=url()->current();
				$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
				return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
			}else{
				return view('errors.404');
			}
		}else{
				return view('errors.404');
			}*/
	}
	
	public function datmuavebambooairwaysgiacucretaihba(){
		$fmenu=DB::table("menus")->where('slug','dat-mua-ve-bamboo-airways-gia-cuc-re-tai-hoa-binh-airlines')->where('status','1')->first();
		if(!empty($fmenu)){
			$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
			$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
			$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
			$canonical=url()->current();
			$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
			return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
		}else{
			return view('errors.404');
		}
	}

	public function datvemaybaygiaretaihba(){
			$fmenu=DB::table("menus")->where('slug','dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines')->where('status','1')->first();
			if(!empty($fmenu)){
				$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
				$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
				$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
				$canonical=url()->current();
				$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';

				return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
			}else{
				return view('errors.404');
			}
	}

	 public function veVietjetAir($slug){
		 return Redirect::to('https://hoabinhairlines.vn/ve-vietjet-air-gia-re-hoa-binh-airlines.html');
		 //Code cũ đang dùng
		/*if($slug=='ve-vietjet-air-gia-re-hoa-binh-airlines'){
		$fmenu=DB::table("menus")->where('slug',$slug)->where('status','1')->first();
		if(!empty($fmenu)){
			$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
			$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
			$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
			$canonical=url()->current();
			$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
			return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));
		}else{
			return view('errors.404');
		}
		}else{
			return view('errors.404');
		}*/
	}
	

	public function ve_vietnam_airlines(){
		return Redirect::to('https://hoabinhairlines.vn/ve-vietnam-airlines/dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines.html');
		/*$fmenu=DB::table("menus")->where('slug','ve-vietnam-airlines')->where('status','1')->first();
		$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
		$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
		$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
		return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));*/
	}
	public function ve_may_bay_gia_re(){
		
		return Redirect::to('https://hoabinhairlines.vn/ve-may-bay-gia-re/ve-may-bay-gia-re-hoa-binh-airlines.html');
		
		/*$fmenu=DB::table("menus")->where('slug','ve-may-bay-gia-re')->where('status','1')->first();
		$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
		$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
		$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
		return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));*/
	}
	public function ve_vietjetair(){
		return Redirect::to('https://hoabinhairlines.vn/ve-vietjet-air/ve-vietjet-air-gia-re-hoa-binh-airlines.html');
		/*$fmenu=DB::table("menus")->where('slug','ve-vietjet-air')->where('status','1')->first();
		$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
		$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
		$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
		return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));*/
	}
	public function ve_bamboo_airways(){
		return Redirect::to('https://hoabinhairlines.vn/ve-bamboo-airways/dat-mua-ve-bamboo-airways-gia-cuc-re-tai-hoa-binh-airlines.html');
		/*$fmenu=DB::table("menus")->where('slug','ve-bamboo-airways')->where('status','1')->first();
		$title=$fmenu->title_seo==''?$fmenu->title:$fmenu->title_seo;
		$keywords=$fmenu->keyword_seo==''?$fmenu->title:$fmenu->keyword_seo;
		$description=$fmenu->desc_seo==''?$fmenu->title:$fmenu->desc_seo;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png';
		
		return view("pages.vemaybay",compact('fmenu','title','canonical','og_image','keywords','description'));*/
	}

	public function ListcatAdd(){

	}

	function Send_mail(){
		//send mail
		$to_name = "Ticket Online Booking";
		$to_email = "lethanh376@gmail.com";//send to this email //hello@eventcrew.asia

		$data = array("name"=>"noi dung ten","body"=>"Nội dung body"); //body of mail.blade.php

				Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){
					$message->to($to_email)->subject('Booking from website Ticket');//send this mail with subject
					$message->from($to_email,$to_name);//send from this mail
				});
				//--send mail
		//return Redirect::to('/')->with('message','');
	}
}
