<html>
	<head>
    	<title>VNiSC Booking Form Testing</title>
        <meta charset="utf-8" />
        <style>
			@import "https://hoabinhairlines.vn/demo/CheckFlight/CSS/jquery-ui-1.8.20.custom.css";
			*
			{
				margin:0px; 
				padding:0px; 
				font-family: Arial, Tahoma, Times New Roman;
				font-size:12px;
			}
		</style>
        <script type="text/javascript" src="https://hoabinhairlines.vn/demo/CheckFlight/JS/jquery-1.7.2.min.js" ></script>
        <script type="text/javascript" src="https://hoabinhairlines.vn/demo/CheckFlight/JS/jquery-ui-vn-1.8.20.custom.min.js" ></script>
    </head>
    <body>
    	<form method="post" action="checkbooking.php">
        	<div style="width:380px; border-radius:2px; border:1px solid #cac9c9; height:334px; margin: 0 auto;">
                <div style="padding-left:10px; font-weight:bold; padding-top:10px;font-size:16px;">Check Booking</div>
                <div style="width:98%; height:1px; background-color:#cac9c9; margin:0 auto;   "></div>
                <div style="width:100%; height:20px; float:left; text-align:center; margin-top:10px;" class="radio">
                <span style="display:inline-block;width:121px;"><input type="radio" checked="checked" value="oneway" name="flight_type" id="optOneWay"><label for="optOneWay">One Way</label></span>
                <span style="display:inline-block;width:121px;"><input type="radio" value="roundway" name="flight_type" id="optRoundTrip"><label for="optRoundTrip">Round Trip</label></span>
                </div>
                <div style="width:400px; float:left; height: 19px;  margin-top:10px;" class="From">
                    <div style="width:170px; float:right;" class="label">Departing date:</div>
                    <div style="width:200px;" class="label"><label style=" padding-left:20px;">Departing from:</label>
                    </div>
                </div>

                <div style="width:400px; float:left; height: 19px;" class="From1">
                    <div style="width:170px; float:right;" class="label">
                        <input type="text" style="height:17px;width:120px;" class="input" id="dtpDepartDate" name="dtpDepartDate">
                    </div>
                    <div style="width:200px; padding-left:20px;" class="rddr"><select style="height:25px;width:150px;" class="input1" id="ddlDepartCity" name="ddlDepartCity">
<option value="-- Select --">-- Select --</option><optgroup label="Viet Nam" id="vn"><option value="BMV">Ban Me Thuot (BMV)</option><option value="CAH">Ca Mau (CAH)</option><option value="VCA">Can Tho (VCA)</option><option value="VCS">Con Dao (VCS)</option><option value="DLI">Da Lat (DLI)</option><option value="DAD">Da Nang (DAD)</option><option value="DIN">Dien Bien (DIN)</option><option value="VDH">Dong Hoi (VDH)</option><option value="HAN">Ha Noi (HAN)</option><option value="HPH">Hai Phong (HPH)</option><option value="SGN">Ho Chi Minh City (SGN)</option><option value="HUI">Hue (HUI)</option><option value="NHA">Nha Trang (NHA)</option><option value="PQC">Phu Quoc (PQC)</option><option value="PXU">Pleiku (PXU)</option><option value="UIH">Quy Nhon (UIH)</option><option value="VKG">Rach Gia (VKG)</option><option value="VCL">Tam Ky (VCL)</option><option value="TMK">Tam Ky, Viet Nam (TMK)</option><option value="TBB">Tuy Hoa (TBB)</option><option value="VII">Vinh (VII)</option></optgroup>
<optgroup label="My" id="us"><option value="ATL">Atlanta Hartsfield (ATL)</option><option value="AUS">Austin (AUS)</option><option value="BOS">Boston, Logan (BOS)</option><option value="CHI">Chicago, IL (CHI)</option><option value="DFW">Dallas/Fort Worth (DFW)</option><option value="DEN">Denver (DEN)</option><option value="IAD">Dulles, Washington (IAD)</option><option value="IAH">Geo Bush, Houston (IAH)</option><option value="HNL">Honolulu (HNL)</option><option value="HOU">Houston (HOU)</option><option value="LAX">Los Angeles (LAX)</option><option value="MIA">Miami (MIA)</option><option value="MSP">Minneapolis/St.Paul (MSP)</option><option value="ORD">Ohare, Chicago (ORD)</option><option value="PHL">Philadelphia (PHL)</option><option value="PDX">Portland (PDX)</option><option value="SFO">San Francisco (SFO)</option><option value="SEA">Seattle, Tacoma (SEA)</option><option value="STL">St Louis, Lambert (STL)</option><option value="WAS">Washington (WAS)</option></optgroup>
<optgroup label="Dong Nam A" id="seasia"><option value="BKK">Bangkok (BKK)</option><option value="KUL">Kuala Lumpur (KUL)</option><option value="MNL">Manila (MNL)</option><option value="SIN">Singapore (SIN)</option><option value="RGN">Yangon (RGN)</option></optgroup>
<optgroup label="Dong A" id="neasia"><option value="BJS">Beijing (BJS)</option><option value="PEK">Beijing (PEK)</option><option value="PUS">Busan (PUS)</option><option value="CTU">Chengdu (CTU)</option><option value="FUK">Fukuoka (FUK)</option><option value="CAN">Guangzhou (CAN)</option><option value="HND">Haneda, Tokyo (HND)</option><option value="HKG">Hong Kong (HKG)</option><option value="ICN">Incheon Int, Seoul (ICN)</option><option value="KIX">Kansai, Osaka (KIX)</option><option value="KHH">Kaohsiung (KHH)</option><option value="NGO">Nagoya (NGO)</option><option value="NRT">Narita, Tokyo (NRT)</option><option value="OSA">Osaka (OSA)</option><option value="PVG">Pudong, ShangHai (PVG)</option><option value="SEL">Seoul (SEL)</option><option value="SHA">Shanghai (SHA)</option><option value="TPE">Taipei (TPE)</option><option value="TYO">Tokyo (TYO)</option></optgroup>
<optgroup label="Dong Duong" id="indochina"><option value="LPQ">Luang Prabang (LPQ)</option><option value="PNH">Phnom Penh (PNH)</option><option value="REP">Siem Riep (REP)</option><option value="VTE">Vientiane (VTE)</option></optgroup>
<optgroup label="Chau Au" id="eu"><option value="AMS">Amsterdam (AMS)</option><option value="LCY">Arpt City, London (LCY)</option><option value="CDG">De Gaulle, Paris (CDG)</option><option value="DME">Domodedovo, Moscow (DME)</option><option value="FCO">Fiumicino, Rome (FCO)</option><option value="FRA">Frankfurt (FRA)</option><option value="LGW">Gatwick, London (LGW)</option><option value="LHR">Heathrow, London (LHR)</option><option value="LON">London (LON)</option><option value="MOW">Moscow (MOW)</option><option value="ORY">Orly, Paris (ORY)</option><option value="PAR">Paris (PAR)</option><option value="PRG">Praque (PRG)</option><option value="ROM">Rome (ROM)</option></optgroup>
<optgroup label="Chau Uc" id="au"><option value="MEL">Melbourne (MEL)</option><option value="SYD">Sydney (SYD)</option></optgroup>

</select>
                    </div>
                </div>
                <div style="width:100%; height:25px;"></div>
                 <div style="width:400px; float:left; height: 19px;margin-top:15px;" class="From1">
                    <div style="width:170px; float:right;" class="label">Return date:</div>
                    <div style="width:200px;" class="label"><label style=" padding-left:20px;">Going to:</label>
                    </div>
                </div>
                <div style="width:400px; float:left; height: 19px;" class="From1">
                    <div style="width:170px; float:right;" class="label"><input type="text" style="height:17px;width:120px;" class="input1" id="dtpReturnDate" name="dtpReturnDate">
                    </div>
                    <div style="width:200px; padding-left:20px;" class="rddr"><select style="height:25px;width:150px;" class="input" id="ddlNoiDen" name="ddlReturnCity">
<option value="-- Select --">-- Select --</option><optgroup label="Viet Nam" id="vn"><option value="BMV">Ban Me Thuot (BMV)</option><option value="CAH">Ca Mau (CAH)</option><option value="VCA">Can Tho (VCA)</option><option value="VCS">Con Dao (VCS)</option><option value="DLI">Da Lat (DLI)</option><option value="DAD">Da Nang (DAD)</option><option value="DIN">Dien Bien (DIN)</option><option value="VDH">Dong Hoi (VDH)</option><option value="HAN">Ha Noi (HAN)</option><option value="HPH">Hai Phong (HPH)</option><option value="SGN">Ho Chi Minh City (SGN)</option><option value="HUI">Hue (HUI)</option><option value="NHA">Nha Trang (NHA)</option><option value="PQC">Phu Quoc (PQC)</option><option value="PXU">Pleiku (PXU)</option><option value="UIH">Quy Nhon (UIH)</option><option value="VKG">Rach Gia (VKG)</option><option value="VCL">Tam Ky (VCL)</option><option value="TMK">Tam Ky, Viet Nam (TMK)</option><option value="TBB">Tuy Hoa (TBB)</option><option value="VII">Vinh (VII)</option></optgroup>
<optgroup label="My" id="us"><option value="ATL">Atlanta Hartsfield (ATL)</option><option value="AUS">Austin (AUS)</option><option value="BOS">Boston, Logan (BOS)</option><option value="CHI">Chicago, IL (CHI)</option><option value="DFW">Dallas/Fort Worth (DFW)</option><option value="DEN">Denver (DEN)</option><option value="IAD">Dulles, Washington (IAD)</option><option value="IAH">Geo Bush, Houston (IAH)</option><option value="HNL">Honolulu (HNL)</option><option value="HOU">Houston (HOU)</option><option value="LAX">Los Angeles (LAX)</option><option value="MIA">Miami (MIA)</option><option value="MSP">Minneapolis/St.Paul (MSP)</option><option value="ORD">Ohare, Chicago (ORD)</option><option value="PHL">Philadelphia (PHL)</option><option value="PDX">Portland (PDX)</option><option value="SFO">San Francisco (SFO)</option><option value="SEA">Seattle, Tacoma (SEA)</option><option value="STL">St Louis, Lambert (STL)</option><option value="WAS">Washington (WAS)</option></optgroup>
<optgroup label="Dong Nam A" id="seasia"><option value="BKK">Bangkok (BKK)</option><option value="KUL">Kuala Lumpur (KUL)</option><option value="MNL">Manila (MNL)</option><option value="SIN">Singapore (SIN)</option><option value="RGN">Yangon (RGN)</option></optgroup>
<optgroup label="Dong A" id="neasia"><option value="BJS">Beijing (BJS)</option><option value="PEK">Beijing (PEK)</option><option value="PUS">Busan (PUS)</option><option value="CTU">Chengdu (CTU)</option><option value="FUK">Fukuoka (FUK)</option><option value="CAN">Guangzhou (CAN)</option><option value="HND">Haneda, Tokyo (HND)</option><option value="HKG">Hong Kong (HKG)</option><option value="ICN">Incheon Int, Seoul (ICN)</option><option value="KIX">Kansai, Osaka (KIX)</option><option value="KHH">Kaohsiung (KHH)</option><option value="NGO">Nagoya (NGO)</option><option value="NRT">Narita, Tokyo (NRT)</option><option value="OSA">Osaka (OSA)</option><option value="PVG">Pudong, ShangHai (PVG)</option><option value="SEL">Seoul (SEL)</option><option value="SHA">Shanghai (SHA)</option><option value="TPE">Taipei (TPE)</option><option value="TYO">Tokyo (TYO)</option></optgroup>
<optgroup label="Dong Duong" id="indochina"><option value="LPQ">Luang Prabang (LPQ)</option><option value="PNH">Phnom Penh (PNH)</option><option value="REP">Siem Riep (REP)</option><option value="VTE">Vientiane (VTE)</option></optgroup>
<optgroup label="Chau Au" id="eu"><option value="AMS">Amsterdam (AMS)</option><option value="LCY">Arpt City, London (LCY)</option><option value="CDG">De Gaulle, Paris (CDG)</option><option value="DME">Domodedovo, Moscow (DME)</option><option value="FCO">Fiumicino, Rome (FCO)</option><option value="FRA">Frankfurt (FRA)</option><option value="LGW">Gatwick, London (LGW)</option><option value="LHR">Heathrow, London (LHR)</option><option value="LON">London (LON)</option><option value="MOW">Moscow (MOW)</option><option value="ORY">Orly, Paris (ORY)</option><option value="PAR">Paris (PAR)</option><option value="PRG">Praque (PRG)</option><option value="ROM">Rome (ROM)</option></optgroup>
<optgroup label="Chau Uc" id="au"><option value="MEL">Melbourne (MEL)</option><option value="SYD">Sydney (SYD)</option></optgroup>

</select>
                    </div>
                </div>
                <div style="width:400px; float:left; padding-left:5px; margin-top:20px;font-weight:bold; margin-left:5px; font-size:16px;"> Passengers:</div>
                <div style="width:98%;background-color:#cac9c9; height:1px; margin:0 auto; margin-top:145px;"></div>
                <div style="width:400px; height:19px; float:left; margin-top:15px;" class="Adult">
                    <div style="width:150px; float:left; text-align:center">Adult(+12)</div>
                    <div style="width:100px;float:left;text-align:center">Child(2-12)</div>
                    <div style="width:150px;float:right;text-align:center">Infant(0-2)</div>
                </div>
                   <div style="width:400px; height:19px; float:left; margin-top:5px;" class="Adult">
                    <div style="width:150px; float:left; text-align:center">
                        <select style="height:25px;width:34px;" id="ddlADT" name="ddlADT">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>
                    </div>
                    <div style="width:100px;float:left;text-align:center">
                        <select style="height:25px;width:40px;" id="ddlCHD" name="ddlCHD">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>
                    </div>
                    <div style="width:150px;float:right;text-align:center">
                        <select style="height:25px;width:44px;" id="ddlINF" name="ddlINF">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>

</select>
                    </div>
                </div>
            <div style="width:400px; height:40px; padding-top:50px;text-align:center;">
                    
            </div>
            <div style="width:400px; height:19px;text-align:center;">
                    <input type="submit" style="height:25px;width:80px;" id="btnOk" value="Search" name="btnOk">        
            </div>
    </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
        <script language="javascript">
			$(function(){
				$('#dtpDepartDate').datepicker({
                        format: "dd/mm/yyyy"
                    });
				$('#dtpReturnDate').datepicker({
                        format: "dd/mm/yyyy"
                    });
			});
		</script>
    </body>
</html>