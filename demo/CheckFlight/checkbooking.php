<?

date_default_timezone_set("Asia/Ho_Chi_Minh");

//Hàm mã hóa dữ liệu
function Booking_MakeHash($AgentCode, $From, $To, $DayDepart, $MonthDepart, $YearDepart, $DayReturn, $MonthReturn, $YearReturn, $Type, $ADT, $CHD, $SecurityCode)
{
	return strtoupper(md5($AgentCode . $From . $To . $DayDepart . $MonthDepart . $YearDepart . $DayReturn . $MonthReturn . $YearReturn . $Type . $ADT . $CHD . $SecurityCode));
}

//*********************
$agentCode = "TGT"; 									//AgentCode trong tài liệu tích hợp
$securityCode = "OnIWpyCNE78GHO60Q4jPrA3yRmkDWTyywXSAGtaV0eysYhOUWG5"; 								//SecurityCode trong tài liệu tích hợp
//*********************

$error_msg = "";
$redirectURL = "https://ssl.muadi.com.vn/";			//Domain mặc định có thể thay đổi nếu dùng https thì dùng https://ssl.muadi.com.vn/
$booking_url = "";

//Nhận dữ liệu truyền vào
$flightType = $_GET['flight_type'];
$dep = $_GET['ddlDepartCity'];
$ret = $_GET['ddlReturnCity'];
$departDate = $_GET['dtpDepartDate'];
$splitDate = explode("-", $departDate);
$departDay = $splitDate[0];
$departMonth = $splitDate[1];
$departYear = $splitDate[2];

$returnDate = $_GET['dtpReturnDate'];
if($flightType == "roundway")
{
	$splitDate = explode("-", $returnDate);
	$returnDay = $splitDate[0];
	$returnMonth = $splitDate[1];
	$returnYear = $splitDate[2];
}
else
{
	$returnDay = date("d");
	$returnMonth = date("m");
	$returnYear = date("Y");
}
$ADT = $_GET['ddlADT'];
$CHD = $_GET['ddlCHD'];
$INF = $_GET['ddlINF'];

//Kiểm tra tính hợp lệ của dữ liệu
if($dep != "" && $ret != "" && is_numeric($departDay) && is_numeric($departMonth) && is_numeric($ADT) && is_numeric($CHD) && is_numeric($INF))
{
	$check = true;
	if(checkdate($departMonth, $departDay, $departYear))
	{
		if(mktime(0, 0, 0, $departMonth, $departDay, $departYear) < mktime(0, 0, 0))
		{
			$check = false;
			$error_msg = "Ngày đi sau ngày hiện tại";
		}
	}
	else
	{
		$check = false;
		$error_msg = "Ngày đi không hợp lệ";
	}
	if($flightType == "roundway")
	{
		if(checkdate($returnMonth, $returnDay, $returnYear))
		{
			if(mktime(0, 0, 0, $returnMonth, $returnDay, $returnYear) < mktime(0, 0, 0))
			{
				$check = false;
				$error_msg = "Ngày về sau ngày hiện tại";
			}
			if(mktime(0, 0, 0, $returnMonth, $returnDay, $returnYear) < mktime(0, 0, 0, $departMonth, $departDay, $departYear))
			{
				$check = false;
				$error_msg = "Ngày về sau ngày đi";
			}
		}
		else
		{
			$check = false;
			$error_msg = "Ngày về không hợp lệ";
		}
	}
	if($ADT == 0 && $CHD == 0)
	{
		$check = true;
		$error_msg = "Số người lớn và trẻ em đều bằng không";
	}
	if($ADT + $CHD > 9)
	{
		$check = true;
		$error_msg = "Tổng số người đi quá lớn";
	}
	
	//Kiểm tra dữ liệu thành công
	if($check)
	{
		
		//Mã hóa lại dữ liệu để tránh bị thay đổi trong quá trình truyền đi
		$hash = Booking_MakeHash($agentCode, $dep, $ret, $departDay, $departMonth, $departYear, $returnDay, $returnMonth, $returnYear, $flightType, $ADT, $CHD, $securityCode);
		
		//Ghép dữ liệu tạo ra chuỗi URL
		$booking_url = $redirectURL . "Booking_Redirect.aspx?From=" . $dep . "&DayDepart=" . $departDay . "&MonthDepart=" . $departMonth . "&YearDepart=" . $departYear . "&To=" . $ret . "&DayReturn=" . $returnDay . "&MonthReturn=" . $returnMonth . "&YearReturn=" . $returnYear . "&ADT=" . $ADT . "&CHD=" . $CHD . "&INF=" . $INF . "&Type=" . $flightType . "&Agent=" . $agentCode . "&vHash=2&Hash=" . $hash . "&Lang=vn&Cur=VND";
	}
}
else
{
	$error_msg = "Các tham số truyền vào không hợp lệ";
}
?>

<html>
	<head>
    	<title>VNiSC Booking Form Testing</title>
        <meta charset="utf-8" />
        <style>
			*
			{
				margin:0px; 
				padding:0px; 
				font-family: Arial, Tahoma, Times New Roman;
				font-size:12px;
			}
		</style>
    </head>
    <body>
    	<div style="color: red; font-weight:bold; text-align:center;"><?php echo $error_msg ?></div>
        <div>
        	<?php
				if($booking_url != "")
				{
					echo "
					<b>Đã tạo URL thành công:</b> " . $booking_url . "<br><br><br>
					<b>Nội dung iframe:</b><br><br>
					<iframe id='bookingframe' src='" . $booking_url . "' width='100%' height='1000' style='border: 0px none;'></iframe>";
				}
			?>
        </div>
        
        <script language="javascript">
			var frameID = 'bookingframe';
			var isLoadedFlight = false;
			var isNewPage = false;
		</script>
		<script type="text/javascript" src="http://oth.muadi.com.vn/JS/resizeFrame.js?v=22042014"></script>
    </body>
</html>