<!------------------------------------------------------------------------------>
<!--OLD Code-->
<div class="list-group-item-combo">
	<div class="list-group-item {FlightType} flight-item"  id="row_{CodeLine}" onclick="{selectThis}('{FlightType}', '{CodeLine}'{mutilParam});FlightVNISCSeleted('{FlightType}','{CodeLine}','{Class}','{Seg}')">
	
		<div class="row" style="margin-bottom: 10px; margin-top: 10px">
			<div class="col-xs-3">
			  <img src="images/Airlines/{Airlines}.gif" alt="{Airlines}" class="img-thumbnail" width="48" height="28"> <span class="no-phone">{FlightCode}</span>    </div>
			<div class="col-xs-2 text-center" style="padding:0px">
			  <span class="text-115 text-blue">{TimeFrom} <span class="no-phone">-</span> {TimeTo}</span>
			</div>
			<div class="col-xs-3 text-center">
			  <span class="text-115 text-orange">{Price_Format} {Price_Cur}</span>
			</div>
			<div class="col-md-2 text-center">
				<a href="javascript:void(0)" class="view-flight-item-details" onclick="javascript:viewFlightDetail('{CodeLine}','{Class}',{Seg})">{phrase_detail} <img src="Images/icon_expand.gif" id="narow_{CodeLine}"  align="absmiddle" border="0"></a>			  
			</div>
			<div class="col-md-2 text-center" style="padding:0px">
			  <div class="radio radio-inline">
				<input type="radio" onclick="selectThis('{FlightType}', '{CodeLine}')" value="{phrase_select_row}" id="option_{CodeLine}" name="{FlightType}" class="radio_{FlightType}" style="    left: 2px;    width: 90px;z-index: 999999;"><label></label>
				<input type="hidden" name="class_{CodeLine}" value="{Class}">
				<input type="hidden" name="rclass_{CodeLine}" value="{RClass}">
			  </div>
			  <a title="Chọn" class="btn btn-xs btn-danger btn-select" data-scroll="return_box_wrap" id='tkt_{CodeLine}' onclick="selectThis('{FlightType}', '{CodeLine}');GoToNext('{FlightType}');">Chọn</a>
			</div>
		</div>
	</div>
	<div class ="list-group-item flight-item-details" id="rowdetail_{CodeLine}" style="display:none;">
	</div>
</div>

<!------------------------------------------------------------------------------>
<!--NEW Code-->
<div class="list-group-item-combo">
	<div class="list-group-item {FlightType} flight-item"  id="row_{CodeLine}" onclick="{selectThis}('{FlightType}', '{CodeLine}'{mutilParam});FlightVNISCSeleted('{FlightType}','{CodeLine}','{Class}','{Seg}')">
	
		<div class="row" style="margin-bottom: 10px; margin-top: 10px">
			<div class="col-xs-3">
			  <img src="images/Airlines/{Airlines}.gif" alt="{Airlines}" class="img-thumbnail" width="48" height="28"> <span class="no-phone">{FlightCode}</span>    </div>
			<div class="col-xs-2 text-center" style="padding:0px">
			  <span class="text-115 text-blue">{TimeFrom} <span class="no-phone">-</span> {TimeTo}</span>
			</div>
			<div class="col-xs-3 text-center">
			  <span class="text-115 text-orange">{Price_Format} {Price_Cur}</span>
			</div>
			<div class="col-md-2 text-center">
				<a href="javascript:void(0)" class="view-flight-item-details" onclick="javascript:viewFlightDetail('{CodeLine}','{Class}',{Seg})">{phrase_detail} <img src="Images/icon_expand.gif" id="narow_{CodeLine}"  align="absmiddle" border="0"></a>			  
			</div>
			<div class="col-md-2 text-center" style="padding:0px">
			  <div class="radio radio-inline">
				<input type="radio" onclick="selectThis('{FlightType}', '{CodeLine}')" value="{phrase_select_row}" id="option_{CodeLine}" name="{FlightType}" class="radio_{FlightType}" style="    left: 2px;    width: 90px;z-index: 999999;"><label></label>
				<input type="hidden" name="class_{CodeLine}" value="{Class}">
				<input type="hidden" name="rclass_{CodeLine}" value="{RClass}">
			  </div>
			  <a title="Chọn" class="btn btn-xs btn-danger btn-select" data-scroll="return_box_wrap" id='tkt_{CodeLine}' onclick="selectThis('{FlightType}', '{CodeLine}');GoToNext('{FlightType}');">Chọn</a>
			</div>
		</div>

	</div>
	<div class ="list-group-item flight-item-details" id="rowdetail_{CodeLine}" style="display:none;">
	</div>
</div>
