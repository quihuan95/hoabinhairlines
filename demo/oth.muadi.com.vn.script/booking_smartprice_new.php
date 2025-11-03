
<style type="text/css">
	{$ltCSS}
</style>
<vnisc:include js="JS/vniscFlightAnalyticver2.js">
<script type="text/javascript">
var haveFlight_Go = false;
var haveFlight_Back = false;
var isLoadedFlight = false;
var savedAirlines = "";
var count_dep = 0, count_ret = 0;
var timerDep;
var timerRet;
{$ltJava}

function GoToNext(type)
{
	if(type == 'Go')
	{
		$("#a_ShowBack").focus();
	}
	else
	{
		$("#btnSubmit").focus();
	}
}

function loadFlightData(i_type)
{
	
	if(i_type == "depart")
	{
		if(count_dep == 20)
		{
			$("#loading_" + i_type).css("display", "none");
			$("#loading_slideshow").hide();
			return;
		}
		count_dep++;
	}
	else
	{
		clearInterval(timerRet);
		if(count_ret == 20)
		{
			$("#loading_" + i_type).css("display", "none");
			$("#loading_slideshow").hide();
			return;
		}
		count_ret++;
	}
	var startDate = new Date();
	var condition = "&price_type=total1pax";
	/*if($("#cboSort_PriceType_Total").prop("checked") == "checked" || $("#cboSort_PriceType_Total").prop("checked") == true)
	{
		condition += "&price_type=total";
	}
	else
	{
		condition += "&price_type=fare";
	}*/
	if($("#cboSort_Price").prop("checked") == "checked" || $("#cboSort_Price").prop("checked") == true)
	{
		condition += "&sort=price";
	}
	if($("#cboSort_Time").prop("checked") == "checked" || $("#cboSort_Time").prop("checked") == true)
	{
		condition += "&sort=time";
	}
	if($("#cboSort_Airline").prop("checked") == "checked" || $("#cboSort_Airline").prop("checked") == true)
	{
		condition += "&sort=airline";
	}
	var tmpAirlines = "";
	if(!isLoadedFlight)
	{
		$("input[name='cboAirlines']").each(function() {
			if($(this).prop("checked") == "checked" || $(this).prop("checked") == true)
			{
				tmpAirlines += "-" + $(this).val();
			}
		});
		savedAirlines = tmpAirlines;
	}
	else
	{
		tmpAirlines = savedAirlines;
	}
	if(tmpAirlines != "")
	{
		condition += "&lstAirlines=" + tmpAirlines;
	}
	if(fromTime > 0)
	{
		condition += "&fromTime=" + fromTime;
	}
	if(toTime < 2400)
	{
		condition += "&toTime=" + toTime;
	}
	$.post("Misc.aspx?sid=" + flight_session + "&Do=" + parameterGet + "&type=" + i_type + condition, { },
	   function(data) {
		   
			   //No flight available
			if(data == "NO_FLIGHT")
			{
				var noFlight = $("#no_flight_template").html();
				if(noFlight.indexOf('redirect=') == 0)
				{
					top.location.href = noFlight.replace('redirect=', '');
				}
				else
				{
					$("#div_FlightGo").html(noFlight);
					$("#loading_" + i_type).css("display", "none");
					$("#loading_slideshow").hide();
				}
				return;
			}
			
			// Waiting for new flights comming
			if(data == 'WAITING')
			{
				if(i_type == "depart")
				{
					timerDep =  setTimeout(function(){
										loadFlightData(i_type);
									},
									1000
								);
				}
				else
				{
					timerRet =  setTimeout(function(){
										loadFlightData(i_type);
									},
									1000
								);
				}
				return;
			}
			
			//Expand flights
			   if(data.indexOf("<!--FlightData-->") >= 0)
			{
				var flight_data = getContentArea(data, "FlightData");
				var listAirlines = getContentArea(data, "ListAirlines");
				$("#lstAirlines").html(listAirlines);
				if(i_type == "depart")
				{
					$("#div_FlightGo").html(flight_data);
					haveFlight_Go = true;
				}
				else
				{
					$("#div_FlightBack").html(flight_data);
					haveFlight_Go = true;
				}
				var endDate = new Date();
				if((haveFlight_Go || haveFlight_Back) && !isLoadedFlight)
				{
					$(".flightshowonly").slideDown("slow");
				}
				isLoadedFlight = true;
				$("#loading_slideshow").hide();
				if(data.indexOf("<!--ProcessContinue-->") >= 0)
				{
					if(i_type == "depart")
					{
						timerDep =  setTimeout(function(){
											loadFlightData(i_type);
										},
										1000
									);
					}
					else
					{
						timerRet =  setTimeout(function(){
											loadFlightData(i_type);
										},
										1000
									);
					}
					
				}
				else
				{
					$("#loading_" + i_type).css("display", "none");
				}
			}
			else
			{
				$("#loading_" + i_type).css("display", "none");
				$("#loading_slideshow").hide();
			}
	   });
}

function NgayTrongTuan(code)
{
	var day;
	if	(code == "Sun")
	{
		day = "Chủ Nhật";
	}
	if	(code == "Mon")
	{
		day = "Thứ Hai";
	}
	if	(code == "Tue")
	{
		day = "Thứ Ba";
	}
	if	(code == "Wed")
	{
		day = "Thứ Tư";
	}
	if	(code == "Thu")
	{
		day = "Thứ Năm";
	}
	if	(code == "Fri")
	{
		day = "Thứ Sáu";
	}
	if	(code == "Sat")
	{
		day = "Thứ Bảy";
	}
	return day;	
}
function ChangeDate(code)
{
	var tmp = code.toString().split('/');
	return tmp[1]+"/"+tmp[0]+"/"+tmp[2];
}
var _total_chieu_di = 0;
var _total_chieu_ve = 0;
var Status_Go = false;
var Status_Back = false;
function FlightVNISCSeleted(type,FlightLine,Class,Seg)
{
	var sdata="";
	var sADT = $("#sADT").val();
	var sCHD = $("#sCHD").val();
	var sINF = $("#sINF").val();
	var _totaltong ="0";	
	
	if (type == "Go")
	{		
	
		if(Status_Go == false)
		{
			$("."+type).addClass("hidden-data");
			$("."+type + ".flight_selected").removeClass("hidden-data");
			$("#tkt_"+FlightLine).html('Thay đổi');
			Status_Go = true;
		}
		else
		{
			Status_Go = false;
			$("."+type).removeClass("hidden-data");
			$("."+type+" .btn-select").html('Chọn');
		}
		
		console.log('go');	
		if (Class.indexOf("International_oneway") < 0)
		{
			var dates =$("#sdepdate").val();
			var datefomart = ChangeDate(dates);
			var date1= new Date (datefomart);		
			var sdate = date1.toString().split(" ");				
			var ngay = NgayTrongTuan(sdate[0]) +", " + dates;				
			var _tmpchoice="";
			_tmpchoice +="<p class=\"row-fluid font18\" style='font-size: 21px;text-transform: uppercase;color: yellow; margin-bottom:0px; padding-bottom:5px'><span>"+ngay+"</span></p>"
			_tmpchoice +="<p class=\"row-fluid font18 pink\" style='font-size: 15px;text-transform: uppercase;color: yellow;    border-bottom: 1px solid white;padding-bottom: 5px;'><span>Khởi hành (Đi)</span></p>";			
			_tmpchoice +="<p class=\"row-fluid font14 blue\" ><span>Giá vé cơ bản</span></p>";
			var _tmpthue="";
			 var tmpData = $("#data_flight_" + FlightLine).val();
			console.log("data_flight_" + FlightLine);
			console.log(tmpData);
			if (tmpData === undefined) {
				tmpData = "";
			}
			$.post("Misc.aspx?sid=" + flight_session + "&Do=GetFlightDetail&style=Simple&FlightID=" + Seg + "&Class=" + Class, { dataflight : tmpData  },
			
			function(data, status) {
				if(status=="success")
				{
					$("#tmp_ViewFlight").html(data);				
					_tmpchoice +="<div class=\"row-fluid\" >";				
					if(parseInt(sADT) > 0)
					{
						var fare=$(".far_ADT").html();
						var taxs = $(".tax_ADT").html();
						var _total = 0;
						try {
							_total = $(".total_ADT").html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_ADT").html().replace("VND","").replace(",","").replace(",","");
						}

						var _pax = $(".pax_ADT").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);				
						_tmpchoice +="<div class=\"row\">";
							_tmpchoice +="<div class=\"col-md-5 \">";
								_tmpchoice +="Người lớn";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1 \">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5 \" style=\" text-align:right;\">";
								_tmpchoice += "<font size=\"4\" style='color:yellow'>"+fare.replace("VND","")+"</font> <font size=\"1\">VND</font>";
							_tmpchoice +="</div>";
							
						_tmpchoice +="</div>";		

						_tmpthue +="<div class=\"row\">";
							_tmpthue +="<div class=\"col-md-5 \">";
								_tmpthue +="Người lớn";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-1 \">";
								_tmpthue += _pax+"x";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-5 \"  style=\"text-align:right;\">";
								_tmpthue +="<font size=\"4\" style='color:yellow'>"+taxs.replace("VND","")+"</font> <font size=\"1\">VND</font>";								
							_tmpthue +="</div>";
						_tmpthue +="</div>";	
						
					}
					
					if(parseInt(sCHD) > 0)
					{
						var fare=$(".far_CHD").html();
						var taxs = $(".tax_CHD").html();
						var _total = 0;
						try {
							_total = $(".total_CHD").html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_CHD").html().replace("VND","").replace(",","").replace(",","");
						}
						
						var _pax = $(".pax_CHD").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);				
			
						_tmpchoice +="<div class=\"row\">";
							_tmpchoice +="<div class=\"col-md-5 \">";
								_tmpchoice +="Trẻ em";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1 \">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5 \" style=\" text-align:right;\">";
								_tmpchoice += "<font size=\"4\" style='color:yellow'>"+fare.replace("VND","")+"</font> <font size=\"1\">VND</font>";
							_tmpchoice +="</div>";
						_tmpchoice +="</div>";
						
						_tmpthue +="<div class=\"row\">";
							_tmpthue +="<div class=\"col-md-5 \">";
								_tmpthue +="Trẻ em";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-1 \">";
								_tmpthue += _pax+"x";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-5 \"  style=\"text-align:right;\">";
								_tmpthue +="<font size=\"4\" style='color:yellow'>"+taxs.replace("VND","")+"</font> <font size=\"1\">VND</font>";								
							_tmpthue +="</div>";
						_tmpthue +="</div>";	
															
						
					}
					
					if(parseInt(sINF) > 0)
					{
						var fare=$(".far_INF").html();
						var taxs = $(".tax_INF").html();
						var _total = 0;
						try {
							_total = $(total_INF).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_INF").html().replace("VND","").replace(",","").replace(",","");
						}						
						var _pax = $(".pax_INF").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);
						_tmpchoice +="<div class=\"row\">";
							_tmpchoice +="<div class=\"col-md-5 \">";
								_tmpchoice +="Sơ sinh";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1 \">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5 \" style=\" text-align:right;\">";
								_tmpchoice += "<font size=\"4\" style='color:yellow'>"+fare.replace("VND","")+"</font> <font size=\"1\">VND</font>";
							_tmpchoice +="</div>";
						_tmpchoice +="</div>";	
						
						_tmpthue +="<div class=\"row\">";
							_tmpthue +="<div class=\"col-md-5\">";
								_tmpthue +="Sơ sinh";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-1\">";
								_tmpthue += _pax+"x";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-5\"  style=\"text-align:right;\">";
								_tmpthue +="<font size=\"4\" style='color:yellow'>"+taxs.replace("VND","")+"</font> <font size=\"1\">VND</font>";								
							_tmpthue +="</div>";
						_tmpthue +="</div>";	
															
					}								
					_tmpchoice +="</div>";								
					_tmpchoice +="<p class=\"row-fluid font14 blue\" style=\"margin:10px 0px;\"><span>Phí dịch vụ - thuế</span></p>";
					_tmpchoice +="<div class=\"row-fluid\" >";				
					_tmpchoice +=_tmpthue;
					_tmpchoice +="</div>";			
					_tmpchoice =_tmpchoice;	
					
					_tmpchoice +="<div class=\"row\" style=\"    border-top: 1px solid white;padding-top: 5px;\">";						
					
						_tmpchoice +="<div class=\"col-md-6 col-xs-4\" style='color: yellow;font-size: 18px;'>";
								_tmpchoice +="Tổng giá chiều đi";
							_tmpchoice +="</div>";
																					
							_tmpchoice +="<div class=\"col-md-6 col-xs-8\" style='    text-align: right;'>";
								_tmpchoice +="<font size=\"5\" style='color:yellow'>"+addCommas(_totaltong)+"</font> <font size=\"1\">VND</font>";								
						_tmpchoice +="</div>";
																		
					_tmpchoice +="</div>";
					_total_chieu_di = _totaltong;
					console.log("a:"+_total_chieu_di);
					
					$("#chieudi").html(_tmpchoice);					
					var htmldata = $("#viewIn").html();
					htmldata = htmldata.replace("chieudi","data-chieudi").replace("chieuve","data-chieuve");
					$("#dataselect").html(htmldata);
					
				}
			});     		
			$("#tmp_ViewFlight").html("");				
		}
		else
		{
		
			var dates =$("#sdepdate").val();
			var datefomart = ChangeDate(dates);
			var date1= new Date (datefomart);		
			var sdate = date1.toString().split(" ");				
			var ngay = NgayTrongTuan(sdate[0]) +", " + dates;				
			var _tmpchoice="";
			_tmpchoice +="<p class=\"row-fluid font18\" style='font-size: 21px;text-transform: uppercase;color: yellow; margin-bottom:0px; padding-bottom:5px'><span>"+ngay+"</span></p>"
			_tmpchoice +="<p class=\"row-fluid font18 pink\" style='font-size: 15px;text-transform: uppercase;color: yellow;    border-bottom: 1px solid white;padding-bottom: 5px;'><span>Khởi hành (Đi)</span></p>";			
			var _tmpthue="";
			
			 var tmpData = $("#data_flight_" + FlightLine).val();
			console.log("data_flight_" + FlightLine);
			console.log(tmpData);
			if (tmpData === undefined) {
				tmpData = "";
			}
			$.post("Misc.aspx?sid=" + flight_session + "&Do=GetFlightDetail&style=Simple&FlightID=" + Seg + "&Class=" + Class, { dataflight : tmpData  },
			
			function(data, status) {
				if(status=="success")
				{
					$("#tmp_ViewFlight").html(data);				
					_tmpchoice +="<div class=\"row-fluid\" >";				
					if(parseInt(sADT) > 0)
					{
						var fare=$(".far_ADT").html();
						console.log(fare);
						var taxs = $(".tax_ADT").html();
						console.log(taxs);
						
						var _total = 0;
						try {
							_total = $(total_ADT).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_ADT").html().replace("VND","").replace(",","").replace(",","");
						}
						var _pax = $(".pax_ADT").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);				
						_tmpchoice +="<div class=\"row\">";
							_tmpchoice +="<div class=\"col-md-5\">";
								_tmpchoice +="Người lớn";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1\">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5\" style=\" text-align:right\">";
								_tmpchoice +=fare;
							_tmpchoice +="</div>";
							
						_tmpchoice +="</div>";		

						
						
					}
					
					if(parseInt(sCHD) > 0)
					{
						var fare=$(".far_CHD").html();
						var taxs = $(".tax_CHD").html();
						
						var _total = 0;
						try {
							_total = $(total_CHD).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_CHD").html().replace("VND","").replace(",","").replace(",","");
						}
						var _pax = $(".pax_CHD").html();
						
						_totaltong = parseInt(_total) + parseInt(_totaltong);				
			
						_tmpchoice +="<div class=\"row\">";
							_tmpchoice +="<div class=\"col-md-5\">";
								_tmpchoice +="Trẻ em";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1\">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5\" style=\" text-align:right\">";
								_tmpchoice +=fare;
							_tmpchoice +="</div>";
						_tmpchoice +="</div>";
						
						
															
						
					}
					
					if(parseInt(sINF) > 0)
					{
						var fare=$(".far_INF").html();
						var taxs = $(".tax_INF").html();
						var _total = 0;
						try {
							_total = $(total_INF).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_INF").html().replace("VND","").replace(",","").replace(",","");
						}
						
						var _pax = $(".pax_INF").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);
						_tmpchoice +="<div class=\"row\">";
							_tmpchoice +="<div class=\"col-md-5\">";
								_tmpchoice +="Sơ sinh";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1\">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5\" style=\" text-align:right\">";
								_tmpchoice +=fare;
							_tmpchoice +="</div>";
						_tmpchoice +="</div>";	
						
						
															
					}								
					_tmpchoice +="</div>";	
					
					var	tongphi= 0;
					tongphi = $("#totalfee").val();
					tongphi =tongphi.replace("VND","").replace(",","").replace(",","").replace(",","");
					_tmpchoice +="<p class=\"row-fluid font14 blue\" style=\"margin:10px 0px;\"><span>Tổng phí dịch vụ - thuế</span></p>";
					_tmpchoice +="<div class=\"row-fluid\" >";	
					_tmpthue +="<div class=\"col-xs-12\" style=\"text-align:right\">"+addCommas(tongphi)+"  VND</div>"	;				
					_tmpchoice +=_tmpthue;
					_tmpchoice +="</div>";			
					_tmpchoice =_tmpchoice;	
					_totaltong = parseInt(_totaltong) + parseInt(tongphi);
					_tmpchoice +="<p class=\"font20 pink\" style=\"margin:10px 0px;text-align:right;\"><span>Tổng giá chiều đi: "+addCommas(_totaltong)+" VNĐ</span></p>";
					$("#chieudi").html(_tmpchoice);					
					var htmldata = $("#viewIn").html();
					_total_chieu_di =_totaltong;
					console.log("b:"+_total_chieu_di);
					htmldata = htmldata.replace("chieudi","data-chieudi").replace("chieuve","data-chieuve");
					$("#dataselect").html(htmldata);		
				}
			});     		
			$("#tmp_ViewFlight").html("");					
		}
		
	}
	if(type == "Back")
	{
	
		if(Status_Back == false)
		{
			$("."+type).addClass("hidden-data");
			$("."+type + ".flight_selected").removeClass("hidden-data");
			$("#tkt_"+FlightLine).html('Thay đổi');
			Status_Back = true;
		}
		else
		{
			Status_Back = false;
			$("."+type).removeClass("hidden-data");
			$("."+type+" .btn-select").html('Chọn');
		}
	console.log('back');	
		var ketqua = $("#dataselect").html();	
			var dates =$("#sretdate").val();
		var datefomart = ChangeDate(dates);
		var date1= new Date (datefomart);		
		var sdate = date1.toString().split(" ");				
		var ngay = NgayTrongTuan(sdate[0]) +", " + dates;				
		var _tmpchoice="";
		_tmpchoice +="<p class=\"row-fluid font18\" style='font-size: 21px;text-transform: uppercase;color: yellow; margin-bottom:0px; padding-bottom:5px'><span>"+ngay+"</span></p>"
		_tmpchoice +="<p class=\"row-fluid font18 pink\" style='font-size: 15px;text-transform: uppercase;color: yellow;    border-bottom: 1px solid white;padding-bottom: 5px;'><span>Khởi hành (Về)</span></p>";					
		_tmpchoice +="<p class=\"row-fluid font14 blue\"><span>Giá vé cơ bản</span></p>";
		var _tmpthue="";		
		 var tmpData = $("#data_flight_" + FlightLine).val();
			console.log("data_flight_" + FlightLine);
			console.log(tmpData);
			if (tmpData === undefined) {
				tmpData = "";
			}
			$.post("Misc.aspx?sid=" + flight_session + "&Do=GetFlightDetail&style=Simple&FlightID=" + Seg + "&Class=" + Class, { dataflight : tmpData  },
		
		function(data, status) {
		
			if(status=="success")
			{
				$("#tmp_ViewFlight").html(data);				
				_tmpchoice +="<div class=\"row-fluid\" >";				
				if(parseInt(sADT) > 0)
					{
						var fare=$(".far_ADT").html();
						var taxs = $(".tax_ADT").html();
						try {
							_total = $(total_ADT).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_ADT").html().replace("VND","").replace(",","").replace(",","");
						}						
						var _pax = $(".pax_ADT").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);	
							console.log(fare);
								console.log(_total);
									console.log(taxs);
						_tmpchoice +="<div class=\"row\">";
						
							_tmpchoice +="<div class=\"col-md-5 \">";
								_tmpchoice +="Người lớn";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1 \">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5 \" style=\" text-align:right;\">";
								_tmpchoice += "<font size=\"4\" style='color:yellow'>"+fare.replace("VND","")+"</font> <font size=\"1\">VND</font>";
							_tmpchoice +="</div>";
							
						_tmpchoice +="</div>";		

						_tmpthue +="<div class=\"row\">";
							_tmpthue +="<div class=\"col-md-5 \">";
								_tmpthue +="Người lớn";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-1 \">";
								_tmpthue += _pax+"x";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-5\"  style=\"text-align:right;\">";
								_tmpthue +="<font size=\"4\" style='color:yellow'>"+taxs.replace("VND","")+"</font> <font size=\"1\">VND</font>";								
							_tmpthue +="</div>";
						_tmpthue +="</div>";	
						
					}
					
					if(parseInt(sCHD) > 0)
					{
						var fare=$(".far_CHD").html();
						var taxs = $(".tax_CHD").html();
						try {
							_total = $(total_CHD).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_CHD").html().replace("VND","").replace(",","").replace(",","");
						}						
						var _pax = $(".pax_CHD").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);				
			
						_tmpchoice +="<div class=\"row\">";
						
							_tmpchoice +="<div class=\"col-md-5 \">";
								_tmpchoice +="Trẻ em";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1 \">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5 \" style=\" text-align:right;\">";
								_tmpchoice += "<font size=\"4\" style='color:yellow'>"+fare.replace("VND","")+"</font> <font size=\"1\">VND</font>";
							_tmpchoice +="</div>";
							
						_tmpchoice +="</div>";
						
						_tmpthue +="<div class=\"row\">";
						
							_tmpthue +="<div class=\"col-md-5\">";
								_tmpthue +="Trẻ em";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-1 \">";
								_tmpthue += _pax+"x";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-5 \"  style=\"text-align:right;\">";
								_tmpthue +="<font size=\"4\" style='color:yellow'>"+taxs.replace("VND","")+"</font> <font size=\"1\">VND</font>";								
							_tmpthue +="</div>";
							
						_tmpthue +="</div>";	
															
						
					}
					
					if(parseInt(sINF) > 0)
					{
						var fare=$(".far_INF").html();
						var taxs = $(".tax_INF").html();
						try {
							_total = $(total_INF).html().replace("VND","").replace(",","").replace(",","").replace(",","");
						}
						catch(err) {
							_total = $(".total_INF").html().replace("VND","").replace(",","").replace(",","");
						}
						
						var _pax = $(".pax_INF").html();
						_totaltong = parseInt(_total) + parseInt(_totaltong);
						_tmpchoice +="<div class=\"row\">";
						
							_tmpchoice +="<div class=\"col-md-5 \">";
								_tmpchoice +="Sơ sinh";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-1 \">";
								_tmpchoice += _pax+"x";
							_tmpchoice +="</div>";
							
							_tmpchoice +="<div class=\"col-md-5 \" style=\" text-align:right;\">";
								_tmpchoice += "<font size=\"4\" style='color:yellow'>"+fare.replace("VND","")+"</font> <font size=\"1\">VND</font>";
							_tmpchoice +="</div>";
							
						_tmpchoice +="</div>";	
						
						_tmpthue +="<div class=\"row\">";
							_tmpthue +="<div class=\"col-md-5 \">";
								_tmpthue +="Sơ sinh";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-1 \">";
								_tmpthue += _pax+"x";
							_tmpthue +="</div>";
							
							_tmpthue +="<div class=\"col-md-5 \"  style=\"text-align:right;\">";
								_tmpthue +="<font size=\"4\" style='color:yellow'>"+taxs.replace("VND","")+"</font> <font size=\"1\">VND</font>";								
							_tmpthue +="</div>";
							
						_tmpthue +="</div>";	
															
					}							
					
				_tmpchoice +="</div>";
				
				_tmpchoice +="<p class=\"row-fluid font14 blue\" style=\"margin:10px 0px;\"><span>Phí dịch vụ - thuế</span></p>";
					_tmpchoice +="<div class=\"row-fluid\" >";				
						_tmpchoice +=_tmpthue;
					_tmpchoice +="</div>";		
				
				_tmpchoice +="<div class=\"row\" style=\"    border-top: 1px solid white;padding-top: 5px;\">";											
					_tmpchoice +="<div class=\"col-md-6 col-xs-4\" style='color: yellow;font-size: 18px;'>";
							_tmpchoice +="Tổng giá chiều về";
						_tmpchoice +="</div>";
																				
						_tmpchoice +="<div class=\"col-md-6 col-xs-8\" style='    text-align: right;'>";
							_tmpchoice +="<font size=\"5\" style=' font-size: 16px;    color: yellow;'>"+addCommas(_totaltong)+"</font> <font size=\"1\">VND</font>";								
					_tmpchoice +="</div>";																	
				_tmpchoice +="</div>";				
				_total_chieu_ve = _totaltong;
				console.log("c:"+_total_chieu_ve);
				$("#chieuve").html(_tmpchoice);				
				var htmldata = $("#viewIn").html();
				htmldata = htmldata.replace("chieudi","data-chieudi").replace("chieuve","data-chieuve");
				$("#dataselect").html(htmldata);				
			}
		});     		
		$("#tmp_ViewFlight").html("");			
	}
	if(parseInt(_total_chieu_di) != 0 && parseInt(_total_chieu_ve) !=0)
	{
		var tmpdata ="";
		tmpdata +="<div class=\"row\" >";
			tmpdata +="<div class=\"col-md-6 col-xs-4\" style=\"color: yellow;font-size: 18px;\">";
				tmpdata +="Tổng giá";
			tmpdata +="</div>";
			tmpdata +="<div class=\"col-md-6 col-xs-8\" style=\"text-align: right;\">";
				tmpdata +="<font size=\"5\" style=\" font-size: 16px;color: yellow;\">"+addCommas(parseInt(parseInt(_total_chieu_ve)+parseInt(_total_chieu_di)))+"</font> <font size=\"1\">VND</font>";
			tmpdata +="</div>";
		tmpdata +="</div>";
		$("#tongchieuall").html(tmpdata);
		$("#tongchieuall").addClass("item_total");
	}
	console.log("d:"+parseInt(parseInt(_total_chieu_ve)+parseInt(_total_chieu_di)));
}
</script>
<style>
.item_total
{
float: left;width: 100%;padding-top: 10px;border-top: 5px solid #C1CBD0;margin-top: 10px;
}
.line_item {
	background: white;
	border: none;    
}
.line_item {
	border: 1px solid white;
	border-bottom: 1px gray dashed;
}
.line_item {
	border-bottom: 1px solid #D3D3D3;
	border-left: 1px solid #D3D3D3;
	border-right: 1px solid #D3D3D3;
	display: block;
	float: left;
	min-height: 48px;
	position: relative;
	width: 100%;
}
.line_item_list:nth-child(2n+1) {
	background: white !important;
}
.line_item:hover {
	background: #DAFF67;
}
.line_item {
	border: 1px solid #D3D3D3;    
	display: block;
	float: left;
	min-height: 48px;
	position: relative;
	width: 100%;
}
.f-left {
	float: left;
}
.nav-tabs.nav-justified>.active>a, .nav-tabs.nav-justified>.active>a:focus, .nav-tabs.nav-justified>.active>a:hover {
	border-bottom-color: #fff;
	background: #f5f5f5;
	/* color: white; */
}
.hidden-data
{
	display:none;
}
#bd_main .col-md-6 h3 span
{
	border-bottom: 0px !important;
	height: 26px !important;
	font-size: 16px !important;
		width: auto;
			padding-right: 5px;
}
</style>
<div class="col-md-9 f-left" style="margin-bottom:20px;">
	<div class="row no-phone" id="progress_bars" >
		<div class="col-md-3">
		  1. Chọn chuyến bay
		  <div class="progress progress-step1">
			<div class="progress-bar progress-bar-warning" style="width: 100%"></div>
		  </div>
		</div>
		<div class="col-md-3">
		  2. Thông tin đặt vé
		  <div class="progress progress-step2">
			<div class="progress-bar progress-bar-success" style="width: 0%"></div>
		  </div>
		</div>
		<div class="col-md-3">
		  3. Đặt vé và giữ chỗ
		  <div class="progress progress-step3">
			<div class="progress-bar progress-bar-info" style="width: 0%"></div>
		  </div>
		</div>
		<div class="col-md-3">
		  4. Thông tin vé
		  <div class="progress progress-step4">
			<div class="progress-bar progress-bar-danger" style="width: 0%"></div>
		  </div>
		</div>
	</div>
	
	<div id="flights">
		<div class="row">
		
			<div class="col-md-6 Go_FlightData"  {$ltShowGo}>
				
				<div class="col-md-12" id="departure_box_wrap">
					<div class="well well-sm">
					  <h3 class="">
						<span>CHIỀU ĐI: </span>
						<span>{$fromName} ({$from})</span> 
						<span><i class="ion-arrow-right-a"></i></span>
						<span>{$toName} ({$to})</span> 
					  </h3>
					  <div class="row">
						<div class="col-md-6">Ngày đi: {$depDate}</div>
						<div class="col-md-6 text-right">
						Hành khách: <strong><vnisc:if condition="isADT">{phrase_adt} : {$ADT} </vnisc:if><vnisc:if condition="isCHD">-  {phrase_chd} : {$CHD}</vnisc:if><vnisc:if condition="isINF">- {phrase_inf} : {$INF}</vnisc:if></strong>
								<input type="hidden" id="sADT" value="{$ADT}"/>
					<input type="hidden" id="sCHD" value="{$CHD}"/>
					<input type="hidden" id="sINF" value="{$INF}"/>
					<input type="hidden" id ="sdepdate" value="{$depDate}"/>
					<input type="hidden" id ="sdepdate_thu" value=""/>
					<input type="hidden" id ="sretdate" value="{$retDate}"/>
						   
						</div>
					  </div>
					  <div class="row" style="margin-bottom: 0">
						<div class="col-md-12 text-right"><i class="text-red">Giá vé đã bao gồm thuế và phí (*)</i></div>
					  </div>
					</div>
					
					<div>
						<ul  class="nav nav-tabs nav-justified">
							{$ltSelectDate_Go}                                                  
						</ul>			
						<div id="loading_depart">
							<div class="line_noback">
								<center><img src="https://ssl.muadi.com.vn/images/stampa.gif" align="absmiddle" /></center>
							</div>
						</div>					
						<div class="row" id="div_FlightGo">						
						</div>
					</div>
					
				</div>
			</div>
		<!--end-depart-->
			
			<div class="col-md-6" {$ltShowBack}>
				<div class="col-md-12" id="return_box_wrap">
					<div class="well well-sm">
						<h3 class=" return">
						  <a href="#" id="a_ShowBack" style="color:#333"><span>CHIỀU VỀ:</span> </a>
						  <span>{$toName} ({$to})</span>
						  <span><i class="ion-arrow-right-a"></i> </span>
						  <span>{$fromName} ({$from})</span>
						</h3>
						<div class="row">
						  <div class="col-md-6">Ngày về: {$retDate}</div>
						  <div class="col-md-6 text-right">
							Hành khách: <strong><vnisc:if condition="isADT">{phrase_adt} : {$ADT} </vnisc:if><vnisc:if condition="isCHD">-  {phrase_chd} : {$CHD}</vnisc:if><vnisc:if condition="isINF">- {phrase_inf} : {$INF}</vnisc:if></strong>						 					
						  </div>
						</div>
						<div class="row" style="margin-bottom: 0">
						  <div class="col-md-12 text-right"><i class="text-red">Giá vé đã bao gồm thuế và phí (*)</i></div>
						</div>
					</div>

					<div>
						<ul class="nav nav-tabs nav-justified" >
							   {$ltSelectDate_Back}                                                 
						</ul>			
						<div id="loading_return">
							<div class="line_noback">
								<center><img src="https://ssl.muadi.com.vn/images/stampa.gif" align="absmiddle" /></center>
							</div>
						</div>					
						<div class="row list-group list-flights list-departure" id="div_FlightBack">						
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="text-center bottom-20" style="margin-top: 10px"  id="div_secondsubmit" runat="server">
		  <input type="submit" ID="btnSubmit2" name="btnSubmit2" value="{phrase_confirm_flight}" onclick="$('#btnSubmit').val('{phrase_processing_please_wait}'); $('#btnSubmit2').val('{phrase_processing_please_wait}'); " disabled class="button submitflight btn btn-danger" />          
		</div>
		
	</div>
	
	
</div>

<div id="no_flight_template" style="display: none;">
{agentphrase_no_flight_available}
</div>
<vnisc:include js="JS/dropdowntabfiles/dropdowntabs.js">
<div class="flight-right-panel" style="display: none;">
	{$phrProcessBar}
		<div id="showError" class="flow-message-error" style="clear: both; display: none;">
			{$ltError}
		</div>

	{agentphrase_hook_agent_listbooking_before}
	<div class="flight_content">
		<span style="text-align:right; float:right; padding-top: 20px;clear: both;">            		
		</span>
	</div>
	
	<div id="maxscroll" style="clear: both;"></div>
	{agentphrase_hook_agent_listbooking_after}
	<div id="buttonborder1">
		<div class="flight_content ffferf">
			<span style="text-align:right; float:right; padding-top: 20px;">
				<input type="hidden" ID="txtFlightGo" name="txtFlightGo" value="" />
				<input type="hidden" ID="txtFlightBack" name="txtFlightBack" value="" />
				<font color="red"><b>{$ltSubmitNotice}</b></font>
				<input type="submit" ID="btnSubmit" name="btnSubmit" value="{phrase_confirm_flight}" onclick="$('#btnSubmit').val('{phrase_processing_please_wait}'); $('#btnSubmit2').val('{phrase_processing_please_wait}'); " disabled class="button submitflight" />
			</span>
		</div>
	</div>
</div>
<div style="display:none">
	<div id="viewIn">
		<div id="chieudi">
		</div>
		<div id="chieuve" style='float: left;width: 100%;padding-top: 10px;border-top: 5px solid #C1CBD0;margin-top: 10px;'>
		</div>
		<div id="tongchieuall" ></div>
		<input type="hidden" ID="tongGos" name="tongGos" value="" />
		<input type="hidden" ID="tongBacks" name="tongBacks" value="" />		
		<p class="row-fluid font14 center" style="text-align:center">
				<a class="btn btn-primary" onclick="$('#btnSubmit2').click();" id="btnSubmit">TIẾP TỤC</a>
		</p> 	
	</div>
	<div id="tmp_box_price">		
											
	</div>
</div>
<div style="display:none">
	<div id="tmp_ViewFlight"></div>
</div>
	