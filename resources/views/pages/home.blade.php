

@extends('layouthome')
@section('content')
    {{ csrf_field() }}
   
   <div class="contentmainbody">
        <div class="row m0 p0xs p15mb">
    <!--<div class="col-xs-12 col-sm-12 col-md-6 p0 pr0xs">
            <div id="dtc-search"></div>
            <script type="text/javascript">
                var dtc_search={path:("https:"==document.location.protocol?"https://":"http://")+"plugin.datacom.vn",productKey:"yvlf7o7mg1j6lhk",languageCode:"vi"};(function(){var t=document.getElementsByTagName("head")[0],n=document.createElement("script");n.async=!0;n.src=dtc_search.path.concat("/Resources/Static/Js/plugin.js?v=" + (new Date().getTime()));n.charset="UTF-8";t.appendChild(n)})();
            </script>
        </div>-->
    <div class="col-xs-12 col-sm-12 col-md-6 p0 pr0xs">
             <!-- Box Tab Vé máy bay/Khách sạn -->
             <div class="tab-ve-ks">
               <!--<ul class="nav nav-tabs">
                  
                      <li class="active tab1"><a data-toggle="tab" href="#ve_may_bay"></a></li>
                                     <li class="tab5"><a href="javascript:void(0);"><i style="color:#f17419;" class="fa fa-tumblr-square" aria-hidden="true"></i><span style="color:#f17419;" class="tab-text-xs">&nbsp;</span></a></li>
                      
                      
                   </ul>-->            
                <div class="tab-content">
                                  <!-- Tab đặt vé máy bay -->
    <div id="ve_may_bay" class="tab-pane fade in active tab-pane1">
       
          <div class="row">
           
                 <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="box-diem go-flight">
                       <div class="label-control">Điểm đi
                          <i class="fa fa-plane go-away" aria-hidden="true"></i>
                       </div>
                                      <!-- <button class="btn btn-place bt-diem-di border-color-red"><span class="txt-ellipse"></span></button> -->
                          <button class="btn btn-place bt-diem-di"><span class="txt-ellipse" data-code="HAN">Ha Noi (HAN) </span></button>
                        
                       <!-- Box Hidden -->
                       <div class="box-select-option">
                          <button class="btn btn-close close1">
                             <i class="fa fa-times hidden-xs"></i>
                             <b class="visible-xs"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                          </button>
                          <div class="title hidden-xs ">
                             Lựa chọn thành phố hoặc sân bay xuất phát
                          </div>
                          <div class="div-in-search">
                             <div class="title-mb visible-xs">Chọn điểm đi</div>
           
                             <div class="div-input-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <i class="fa fa-times"></i>
                                <input type="text" placeholder="Nhập tên thành phố hoặc mã sân bay" class="form-control typeahead input-flight" id="ddlReturnCity" name="ddlReturnCity" value="">
                                <button class="btn btn-orange-34 hidden-xs btn-choice-area">CHỌN</button>
                             </div>
           
                          </div>
                          <div class="row scroll-touch">
                             <div class="kv-noi-dia row m0">
                                <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                   <h3>Việt Nam</h3>
                                   <ul>
                                      <li class="item-diem-di" data-code="HAN">Hà Nội (HAN)</li>
                                      <li class="item-diem-di" data-code="SGN">TP. Hồ Chí Minh (SGN)</li>
                                      <li class="item-diem-di" data-code="CAH">Cà Mau (CAH)</li>
                                      <li class="item-diem-di" data-code="VCA">Cần Thơ (VCA)</li>
                                      <li class="item-diem-di" data-code="VCS">Côn Đảo (VCS)</li>
                                      <li class="item-diem-di" data-code="DLI">Đà Lạt (DLI)</li>
                                      <li class="item-diem-di" data-code="DAD">Đà Nẵng (DAD)</li>
                                      <li class="item-diem-di" data-code="DIN">Điện Biên (DIN)</li>
                                      <li class="item-diem-di" data-code="VDH">Đồng Hới (VDH)</li>
                                      <li class="item-diem-di" data-code="HPH">Hải Phòng (HPH)</li>
                                      <li class="item-diem-di" data-code="HUI">Huế (HUI)</li>
                                      <li class="item-diem-di" data-code="CXR">Nha Trang (CXR)</li>
                                      <li class="item-diem-di" data-code="PQC">Phú Quốc (PQC)</li>
                                      <li class="item-diem-di" data-code="PXU">Pleiku (PXU)</li>
                                      <li class="item-diem-di" data-code="UIH">Quy Nhơn (UIH)</li>
                                      <li class="item-diem-di" data-code="VKG">Rạch Giá (VKG)</li>
                                      <li class="item-diem-di" data-code="VCL">Tam Kỳ (VCL)</li>
                                      <li class="item-diem-di" data-code="THD">Thanh Hóa (THD)</li>
                                      <li class="item-diem-di" data-code="TBB">Tuy Hòa (TBB)</li>
                                      <li class="item-diem-di" data-code="VDO">Van Don (VDO)</li>
                                      <li class="item-diem-di" data-code="VII">Vinh (VII)</li>
                                      <li class="item-diem-di" data-code="BMV">Ban Mê Thuột (BMV)</li>
                                   </ul>
                                </div>
           
                                <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                   <h3>Đông Nam Á</h3>
                                   <ul>
                                      <li class="item-diem-di" data-code="BKK">Bangkok (BKK)</li>
                                      <li class="item-diem-di" data-code="CGK">Jakarta (CGK)</li>
                                      <li class="item-diem-di" data-code="KUL">Kuala Lumpur (KUL)</li>
                                      <li class="item-diem-di" data-code="MNL">Manila (MNL)</li>
                                      <li class="item-diem-di" data-code="SIN">Singapore (SIN)</li>
                                      <li class="item-diem-di" data-code="RGN">Yangon (RGN)</li>
                                   </ul>
                                   
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                     <h3>Đông Bắc Á</h3>
                                     <ul>
                                        <li class="item-diem-di" data-code="BJS">Beijing (BJS)</li>
                                        <li class="item-diem-di" data-code="PUS">Busan (PUS)</li>
                                        <li class="item-diem-di" data-code="CTU">Chengdu (CTU)</li>
                                        <li class="item-diem-di" data-code="FUK">Fukuoka (FUK)</li>
                                        <li class="item-diem-di" data-code="CAN">Guangzhou (CAN)</li>
                                        <li class="item-diem-di" data-code="HKG">Hong Kong (HKG)</li>
                                        <li class="item-diem-di" data-code="KHH">Kaohsiung (KHH)</li>
                                        <li class="item-diem-di" data-code="NGO">Nagoya (NGO)</li>
                                        <li class="item-diem-di" data-code="OSA">Osaka (OSA)</li>
                                        <li class="item-diem-di" data-code="SEL">Seoul (SEL)</li>
                                        <li class="item-diem-di" data-code="SHA">Shanghai (SHA)</li>
                                        <li class="item-diem-di" data-code="TPE">Taipei (TPE)</li>
                                        <li class="item-diem-di" data-code="TYO">Tokyo (TYO)</li>
                                     </ul>
                                  </div>
                             </div>
           
                             <div class="kv-quoc-te row m0">
                                <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                   <h3>Đông Dương</h3>
                                   <ul>
                                      <li class="item-diem-di" data-code="LPQ">Luang Prabang (LPQ)</li>
                                      <li class="item-diem-di" data-code="PNH">Phnom Penh (PNH)</li>
                                      <li class="item-diem-di" data-code="REP">Siem Riep (REP)</li>
                                      <li class="item-diem-di" data-code="VTE">Vientiane (VTE)</li>
                                   </ul>
                                   
                                </div>
           
                                <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                   <h3>Châu Âu</h3>
                                   <ul>
                                      <li class="item-diem-di" data-code="AMS">Amsterdam (AMS)</li>
                                      <li class="item-diem-di" data-code="FRA">Frankfurt (FRA)</li>
                                      <li class="item-diem-di" data-code="LON">London (LON)</li>
                                      <li class="item-diem-di" data-code="MOW">Moscow (MOW)</li>
                                      <li class="item-diem-di" data-code="PAR">Paris (PAR)</li>
                                      <li class="item-diem-di" data-code="PRG">Praque (PRG)</li>
                                      <li class="item-diem-di" data-code="ROM">Rome (ROM)</li>
                                      <li class="item-diem-di" data-code="TSA">Taipei City (TSA)</li>
                                   </ul>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                     <h3>Châu Úc</h3>
                                     <ul>
                                        <li class="item-diem-di" data-code="MEL">Melbourne (MEL)</li>
                                        <li class="item-diem-di" data-code="SYD">Sydney (SYD)</li>
                                     </ul>
                                     <h3>Hoa Kỳ</h3>
                                      <ul>
                                         <li class="item-diem-di" data-code="ATL">Atlanta Hartsfield (ATL)</li>
                                         <li class="item-diem-di" data-code="AUS">Austin (AUS)</li>
                                         <li class="item-diem-di" data-code="BOS">Boston, Logan (BOS)</li>
                                         <li class="item-diem-di" data-code="CHI">Chicago, IL (CHI)</li>
                                         <li class="item-diem-di" data-code="DFW">Dallas/Fort Worth (DFW)</li>
                                         <li class="item-diem-di" data-code="DEN">Denver (DEN)</li>
                                         <li class="item-diem-di" data-code="HNL">Honolulu (HNL)</li>
                                         <li class="item-diem-di" data-code="HOU">Houston (HOU)</li>
                                         <li class="item-diem-di" data-code="LAX">Los Angeles (LAX)</li>
                                         <li class="item-diem-di" data-code="MIA">Miami (MIA)</li>
                                         <li class="item-diem-di" data-code="MSP">Minneapolis/St.Paul (MSP)</li>
                                         <li class="item-diem-di" data-code="PHL">Philadelphia (PHL)</li>
                                         <li class="item-diem-di" data-code="PDX">Portland (PDX)</li>
                                         <li class="item-diem-di" data-code="SFO">San Francisco (SFO)</li>
                                         <li class="item-diem-di" data-code="SEA">Seattle, Tacoma (SEA)</li>
                                         <li class="item-diem-di" data-code="STL">St Louis, Lambert (STL)</li>
                                         <li class="item-diem-di" data-code="WAS">Washington (WAS)</li>
                                      </ul>
                                  </div>
                             </div>
                          </div>
                       </div>
                       <!-- End Box Hidden -->
           
                    </div>
                 </div>
           
                 <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="box-diem back-flight">
                       <div class="label-control">Điểm đến
                          <i class="fa fa-plane back-away" aria-hidden="true"></i>
                       </div>
                                   <button class="btn btn-place bt-diem-den"><span class="txt-ellipse" data-code="SGN">Hồ Chí Minh (SGN)</span></button>
                       <div class="box-select-option">
                          <button class="btn btn-close close1">
                             <i class="fa fa-times hidden-xs"></i>
                             <b class="visible-xs"><i class="fa fa-window-close" aria-hidden="true"></i>Back</b>
                          </button>
                          <div class="title hidden-xs ">
                             Lựa chọn thành phố hoặc sân bay xuất phát
                          </div>
                          <div class="div-in-search">
                             <div class="visible-xs title-mb">Chọn điểm đến</div>
                             <div class="div-input-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <i class="fa fa-times"></i>
                                <input type="text" placeholder="Nhập tên thành phố hoặc mã sân bay" class="form-control typeahead input-flight" id="city_name_back" value="">
                                <button class="btn btn-orange-34 hidden-xs btn-choice-area">CHỌN</button>
                             </div>
                          </div>
                          <div class="row scroll-touch">
                               <div class="kv-noi-dia row m0">
                                  <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                     <h3>Việt Nam</h3>
                                     <ul>
                                        <li class="item-diem-den" data-code="HAN">Hà Nội (HAN)</li>
                                        <li class="item-diem-den" data-code="SGN">TP. Hồ Chí Minh (SGN)</li>
                                        <li class="item-diem-den" data-code="CAH">Cà Mau (CAH)</li>
                                        <li class="item-diem-den" data-code="VCA">Cần Thơ (VCA)</li>
                                        <li class="item-diem-den" data-code="VCS">Côn Đảo (VCS)</li>
                                        <li class="item-diem-den" data-code="DLI">Đà Lạt (DLI)</li>
                                        <li class="item-diem-den" data-code="DAD">Đà Nẵng (DAD)</li>
                                        <li class="item-diem-den" data-code="DIN">Điện Biên (DIN)</li>
                                        <li class="item-diem-den" data-code="VDH">Đồng Hới (VDH)</li>
                                        <li class="item-diem-den" data-code="HPH">Hải Phòng (HPH)</li>
                                        <li class="item-diem-den" data-code="HUI">Huế (HUI)</li>
                                        <li class="item-diem-den" data-code="CXR">Nha Trang (CXR)</li>
                                        <li class="item-diem-den" data-code="PQC">Phú Quốc (PQC)</li>
                                        <li class="item-diem-den" data-code="PXU">Pleiku (PXU)</li>
                                        <li class="item-diem-den" data-code="UIH">Quy Nhơn (UIH)</li>
                                        <li class="item-diem-den" data-code="VKG">Rạch Giá (VKG)</li>
                                        <li class="item-diem-den" data-code="VCL">Tam Kỳ (VCL)</li>
                                        <li class="item-diem-den" data-code="THD">Thanh Hóa (THD)</li>
                                        <li class="item-diem-den" data-code="TBB">Tuy Hòa (TBB)</li>
                                        <li class="item-diem-den" data-code="VDO">Van Don (VDO)</li>
                                        <li class="item-diem-den" data-code="VII">Vinh (VII)</li>
                                        <li class="item-diem-den" data-code="BMV">Ban Mê Thuột (BMV)</li>
                                     </ul>
                                  </div>
                          
                                  <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                     <h3>Đông Nam Á</h3>
                                     <ul>
                                        <li class="item-diem-den" data-code="BKK">Bangkok (BKK)</li>
                                        <li class="item-diem-den" data-code="CGK">Jakarta (CGK)</li>
                                        <li class="item-diem-den" data-code="KUL">Kuala Lumpur (KUL)</li>
                                        <li class="item-diem-den" data-code="MNL">Manila (MNL)</li>
                                        <li class="item-diem-den" data-code="SIN">Singapore (SIN)</li>
                                        <li class="item-diem-den" data-code="RGN">Yangon (RGN)</li>
                                     </ul>
                                  </div>
                                  
                                  <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                       <h3>Đông Bắc Á</h3>
                                       <ul>
                                          <li class="item-diem-den" data-code="BJS">Beijing (BJS)</li>
                                          <li class="item-diem-den" data-code="PUS">Busan (PUS)</li>
                                          <li class="item-diem-den" data-code="CTU">Chengdu (CTU)</li>
                                          <li class="item-diem-den" data-code="FUK">Fukuoka (FUK)</li>
                                          <li class="item-diem-den" data-code="CAN">Guangzhou (CAN)</li>
                                          <li class="item-diem-den" data-code="HKG">Hong Kong (HKG)</li>
                                          <li class="item-diem-den" data-code="KHH">Kaohsiung (KHH)</li>
                                          <li class="item-diem-den" data-code="NGO">Nagoya (NGO)</li>
                                          <li class="item-diem-den" data-code="OSA">Osaka (OSA)</li>
                                          <li class="item-diem-den" data-code="SEL">Seoul (SEL)</li>
                                          <li class="item-diem-den" data-code="SHA">Shanghai (SHA)</li>
                                          <li class="item-diem-den" data-code="TPE">Taipei (TPE)</li>
                                          <li class="item-diem-den" data-code="TYO">Tokyo (TYO)</li>
                                       </ul>
                                    </div>
                               </div>
                          
                               <div class="kv-quoc-te row m0">
                                  <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                     <h3>Đông Dương</h3>
                                     <ul>
                                        <li class="item-diem-den" data-code="LPQ">Luang Prabang (LPQ)</li>
                                        <li class="item-diem-den" data-code="PNH">Phnom Penh (PNH)</li>
                                        <li class="item-diem-den" data-code="REP">Siem Riep (REP)</li>
                                        <li class="item-diem-den" data-code="VTE">Vientiane (VTE)</li>
                                     </ul>
                                  </div>
                          
                                  <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                     <h3>Châu Âu</h3>
                                     <ul>
                                        <li class="item-diem-den" data-code="AMS">Amsterdam (AMS)</li>
                                        <li class="item-diem-den" data-code="FRA">Frankfurt (FRA)</li>
                                        <li class="item-diem-den" data-code="LON">London (LON)</li>
                                        <li class="item-diem-den" data-code="MOW">Moscow (MOW)</li>
                                        <li class="item-diem-den" data-code="PAR">Paris (PAR)</li>
                                        <li class="item-diem-den" data-code="PRG">Praque (PRG)</li>
                                        <li class="item-diem-den" data-code="ROM">Rome (ROM)</li>
                                        <li class="item-diem-den" data-code="TSA">Taipei City (TSA)</li>
                                     </ul>
                                  </div>
                                  
                                  <div class="col-xs-12 col-sm-12 col-sm-4 p0">
                                       <h3>Châu Úc</h3>
                                       <ul>
                                          <li class="item-diem-den" data-code="MEL">Melbourne (MEL)</li>
                                          <li class="item-diem-den" data-code="SYD">Sydney (SYD)</li>
                                       </ul>
                                       <h3>Hoa Kỳ</h3>
                                       <ul>
                                          <li class="item-diem-den" data-code="ATL">Atlanta Hartsfield (ATL)</li>
                                          <li class="item-diem-den" data-code="AUS">Austin (AUS)</li>
                                          <li class="item-diem-den" data-code="BOS">Boston, Logan (BOS)</li>
                                          <li class="item-diem-den" data-code="CHI">Chicago, IL (CHI)</li>
                                          <li class="item-diem-den" data-code="DFW">Dallas/Fort Worth (DFW)</li>
                                          <li class="item-diem-den" data-code="DEN">Denver (DEN)</li>
                                          <li class="item-diem-den" data-code="HNL">Honolulu (HNL)</li>
                                          <li class="item-diem-den" data-code="HOU">Houston (HOU)</li>
                                          <li class="item-diem-den" data-code="LAX">Los Angeles (LAX)</li>
                                          <li class="item-diem-den" data-code="MIA">Miami (MIA)</li>
                                          <li class="item-diem-den" data-code="MSP">Minneapolis/St.Paul (MSP)</li>
                                          <li class="item-diem-den" data-code="PHL">Philadelphia (PHL)</li>
                                          <li class="item-diem-den" data-code="PDX">Portland (PDX)</li>
                                          <li class="item-diem-den" data-code="SFO">San Francisco (SFO)</li>
                                          <li class="item-diem-den" data-code="SEA">Seattle, Tacoma (SEA)</li>
                                          <li class="item-diem-den" data-code="STL">St Louis, Lambert (STL)</li>
                                          <li class="item-diem-den" data-code="WAS">Washington (WAS)</li>
                                       </ul>
                                    </div>
                               </div>
                            </div>
           
                       </div>
                    </div>
                 </div>
           
                 <div class="col-xs-12 box-itinerary">
                    <div class="fl mr15">
                       <label class="lb-input">
                          <input type="radio" name="loai-ve" value="no_return">
                          <span>Một chiều</span>
                       </label>                                                
                    </div>
                    <div class="fl">
                       <label class="lb-input">
                          <input type="radio" name="loai-ve" checked value="return">
                          <span>Khứ hồi</span>
                       </label>                                                
                    </div>
           
                          </div>
               <script type="text/javascript">
               $( document ).ready(function() {
                    var todayCu = new Date();
                    var nextDay=new Date();
                    nextDay.setDate(todayCu.getDate()+1);
                    var dateCurrent = todayCu.getDate()+'/'+(todayCu.getMonth()+1)+'/'+todayCu.getFullYear();
                    var dateNext = nextDay.getDate()+'/'+(nextDay.getMonth()+1)+'/'+nextDay.getFullYear();
                    $('#date_di').val(dateCurrent);
                    $('#date_ve').val(dateNext);
               }); 
               </script>
                 <div class="col-xs-6 col-sm-6 col-md-6 date-go">
                    <div class="form-group form-date">
                       <div class="label-control">
                          Ngày đi
                       </div>
                       <label class="control-label" for="date_di"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                       <input class="form-control" id="date_di" name="date_di" placeholder="DD/MM/YYYY" type="datetime" readonly="readonly" value="05/07/2022"/>
                    </div>
                    <div class="form-group">
                         <label class="lunar-calendar lunar-go">Âm lịch: Thứ bảy x/x</label>
                      </div>
                 </div>
           
                 <div class="col-xs-6 col-sm-6 col-md-6 date-return">
                    <div class="form-group form-date">
                       <div class="label-control">
                          Ngày về
                       </div>
                       <label class="control-label" for="date_ve">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                       </label>
                       <input class="form-control" id="date_ve" name="date_ve" placeholder="DD/MM/YYYY" type="datetime" readonly="readonly" value="08/07/2022" />
                                   
                    </div>
                    <div class="form-group">
                       <label class="lunar-calendar lunar-back">Âm lịch: Thứ bảy x/x</label>
                    </div>
                 </div>
           
                 <div class="col-xs-6 col-sm-6 col-md-6 box-search-month" id="box-search-month-go">
                    <div class="form-group form-months">
                       <div class="label-control">
                          Tháng đi
                       </div>
                       <select class="select2 form-control search-month" name="select-search-month-go">
                                      <option value="072022">07/2022</option>
                                      <option value="082022">08/2022</option>
                                      <option value="092022">09/2022</option>
                                      <option value="102022">10/2022</option>
                                      <option value="112022">11/2022</option>
                                      <option value="122022">12/2022</option>
                                      <option value="012023">01/2023</option>
                                      <option value="022023">02/2023</option>
                                      <option value="032023">03/2023</option>
                                      <option value="042023">04/2023</option>
                                      <option value="052023">05/2023</option>
                                      <option value="062023">06/2023</option>
                                   </select>
                    </div>
                 </div>
           
                 <div class="col-xs-6 col-sm-6 col-md-6 box-search-month" id="box-search-month-back">
                    <div class="form-group form-months">
                       <div class="label-control">
                          Tháng về
                       </div>
                       <select class="select2 form-control search-month" name="select-search-month-back">
                                      <option value="072022">07/2022</option>
                                      <option value="082022">08/2022</option>
                                      <option value="092022">09/2022</option>
                                      <option value="102022">10/2022</option>
                                      <option value="112022">11/2022</option>
                                      <option value="122022">12/2022</option>
                                      <option value="012023">01/2023</option>
                                      <option value="022023">02/2023</option>
                                      <option value="032023">03/2023</option>
                                      <option value="042023">04/2023</option>
                                      <option value="052023">05/2023</option>
                                      <option value="062023">06/2023</option>
                                   </select>
                    </div>
                 </div>
              </div>
       
       
       <div class="num-ve">
          <div class="hidden-xs hidden-sm">
             <table>
                <tr>
                   <td>Người lớn<i class="fa fa-male" aria-hidden="true"></i></td>
                   <td class="h-select">
                      <select class="select2 form-control" id="ddlADT" name="ddlADT">
                         <option value="1" selected>1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
                      </select>
                   </td>
                   <td>
    
                      <span class="hidden-xs">(từ 12 tuổi trở lên)</span>
                      <i class="visible-xs">(12+ tuổi) </i>
                   </td>
                </tr>
    
                <tr>
                   <td>Trẻ em<i class="fa fa-child" aria-hidden="true"></i></td>
                   <td class="h-select">
                      <select class="select2 form-control" id="ddlCHD" name="ddlCHD">
                         <option value="0" selected>0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
                      </select>
                   </td>
                   <td>
                      <span class="hidden-xs">(từ 2 đến dưới 12 tuổi)</span>
                      <i class="visible-xs">(2 - 12 tuổi) </i>
                   </td>
                </tr>
    
                <tr>
                     <td>Em bé<i class="fa fa-universal-access" aria-hidden="true"></i></td>
                     <td class="h-select">
                        <select class="select2 form-control" id="ddlINF" name="ddlINF">
                           <option value="0" selected>0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                        </select>
                     </td>
                     <td>
                 
                        <span class="hidden-xs">(dưới 2 tuổi)</span>
                        <i class="visible-xs">(0 - 2 tuổi) </i>
                     </td>
                  </tr>
             </table>
          </div>
    
          <div class="div-number visible-xs visible-sm">
             <ul class="">
                <li class="">
                   <div class="row m0">
                      <div class="left">
                         Người lớn <i class="fa fa-male" aria-hidden="true"></i>
                      </div>
                      <div class="right">
                         <button class="btn btn-math" id="adults_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                         <span id="adults">1</span>
                         <button class="btn btn-math" id="adults_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <div class="left">(12+ tuổi)</div>
                      <input type="hidden" name="num-adault-xs" id="num-adault-xs" value="1" >
                   </div>
                </li>
                <li class="">
                   <div class="row m0">
                      <div class="left">
                         Trẻ em <i class="fa fa-child" aria-hidden="true"></i>
                      </div>
                      <div class="right">
                         <button class="btn btn-math" id="child_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                         <span id="child">0</span>
                         <button class="btn btn-math" id="child_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <div class="left">(2 - 12 tuổi)</div>
                      <input type="hidden" name="num-child-xs" id="num-child-xs" value="0" >
                   </div>
                </li>
                <li class="">
                   <div class="row m0">
                      <div class="left">
                         Em bé <i class="fa fa-universal-access" aria-hidden="true"></i>
                      </div>
                      <div class="right">
                         <button class="btn btn-math" id="baby_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                         <span id="baby">0</span>
                         <button class="btn btn-math" id="baby_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                      <div class="left">(0 - 2 tuổi)</div>
                      <input type="hidden" name="num-baby-xs" id="num-baby-xs" value="0" >
                   </div>
                </li>
             </ul>
          </div>
       </div>
    
       <div class="row m0">
          <div class="fl w100p-xs hidden-xs">
             
          </div>
          <div class="box-btn-search fr w100p-xs txc-xs">
             <button class="btn btn-tim-ve" href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
                TÌM CHUYẾN BAY
             </button>
             
          </div>
       </div>
       
    </div>                    
                   
                               </div>
             </div>
             <!-- End Box Tab Vé máy bay/Khách sạn -->
    
                </div>    
    <div class="col-xs-12 col-sm-6 col-md-6 p0 pl10 pl0xs mt15xs hidden-xs hidden-sm">
        <div class="box-content-slider">
           <div class="row filtering">
             <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="row">
                             <div class="wap-items-ss brbox">
                                 <div class="wap-ss-img">
                                     <img src="https://hoabinhairlines.vn/public/uploads/banner/VietnamAirlines80.jpg" alt="Hòa Bình Airlines" width="100%">
                                 </div>
                             </div>
                         </div>
                     </div>
               <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="row">
                       <div class="wap-items-ss brbox">
                           <div class="wap-ss-img">
                               <img src="https://hoabinhairlines.vn/public/uploads/banner/Sieu May Bay94.jpg" alt="Từ 28-03-2021 bay hoàn toàn bằng siêu máy bay" width="100%">
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="row">
                       <div class="wap-items-ss brbox">
                           <div class="wap-ss-img">
                               <img src="https://hoabinhairlines.vn/public/uploads/banner/VNairline 2109689.jpg" alt="Hòa Bình Airlines" width="100%">
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="row">
                       <div class="wap-items-ss brbox">
                           <div class="wap-ss-img">
                               <img src="https://hoabinhairlines.vn/public/uploads/banner/Uu-dai-danh-cho-khach-le67.jpg" alt="Ưu đãi dành cho khách lẻ" width="100%">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
            <!--<div class="slider-ads">
                   <div class="item-slider">
                       <img src="https://hoabinhairlines.vn/public/uploads/banner/VietnamAirlines80.jpg" alt="Hòa Bình Airlines" width="100%">
                   </div>
                   <div class="item-slider">
                       <img src="https://hoabinhairlines.vn/public/uploads/banner/Sieu May Bay94.jpg" alt="Từ 28-03-2021 bay hoàn toàn bằng siêu máy bay" width="100%">
                   </div>
                   <div class="item-slider">
                       <img src="https://hoabinhairlines.vn/public/uploads/banner/VNairline 2109689.jpg" alt="Hòa Bình Airlines" width="100%">
                   </div>
                   <div class="item-slider">
                       <img src="https://hoabinhairlines.vn/public/uploads/banner/Uu-dai-danh-cho-khach-le67.jpg" alt="Ưu đãi dành cho khách lẻ" width="100%">
                   </div>
               </div>-->
        </div>
        <div class="box-slider-lastest-news">
            <div class="slider-lastest-news">
               @foreach($news_banner as $kb=>$vb)
               <div>
                  <div class="item-ve">
                       <a title="{!! $vb->title !!}" href="{{ URL::to($vb->slug) }}" rel="nofollow" target="_blank"><img src="{{ asset('public/uploads/news/'.$vb->picture) }}" style="width:100%;height:145px;"></a>
                   </div>
               </div>
               @endforeach
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="row booking-type bg-white" id="how-buy-pay">
    <div class="col-xs-12 col-sm-12 col-sm-12 p0 pr15">
        <h2 class="tit" style="margin-bottom: 0px!important;">Giới thiệu</h2>
        <div class="booking-content p0">
            <div class="booking-step" style="padding-left: 15px!important;">
                <div class="row mt10">
                    <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                        <p>HoaBinh Airlines là thương hiệu chính thức của phòng vé công ty TNHH Thương mại và đầu tư du lịch quốc tế Hoà Bình – đại lý cấp I của các hãng hàng không Vietnam Airlines, Bamboo Airways, Vietjet Air và đối tác của nhiều hãng hàng không nổi tiếng thế giới.</p>
                        <p>Quý khách có thể đặt vé máy bay nhanh chóng, thuận tiện và tiết kiệm với chức năng đặt và thanh toán online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .tit a{ float: right;font-size: 18px;margin-top: 8px;color: #04245d; }
    .tit a:hover{ text-decoration: none; }
    @media only screen and (min-width:320px) and (max-width:736px){ .tit a{ font-size:15px; }  }
</style>
<div id="contenthomemain">
<div class="clearfix"></div>
<div class="row booking-type" id="cheap-flight">
    <!--<div class="tit"><h2 style="float: left;margin: 0px;padding: 0px;">Dịch vụ vé máy bay giá rẻ</h2></div>-->
    <!--<div class="row">
            <div class="col-md-12">
            <div class="overlay">
                <a class="overlay-ads" rel="nofollow" href="https://hoabinhairlines.vn/ve-may-bay-gia-re-hoa-binh-airlines.html" target="_blank"><img class="img-responsive" style="height: 200px" src="https://hoabinhairlines.vn/public/userfiles/files/Ve%20may%20bay%20gia%20re%20la%20cum%20tu%20hot%20trong%20cong%20dong%20me%20xe%20dich%20HoaBinh%20Airline.jpg"></a><h3 style="width: fit-content"><a rel="nofollow" href="https://hoabinhairlines.vn/ve-may-bay-gia-re-hoa-binh-airlines.html" target="_blank">Vé máy bay giá rẻ HoaBinh Airlines</a></h3></div></div>
         </div>-->
    
    <div class="slider-ve-re">
       
        <div class="item-ve-cheap">
            <img alt="Hà Nội - Phú Quốc" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-PQC.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hà Nội - Phú Quốc</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Đà Nẵng - Hồ Chí Minh" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-SGN.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Đà Nẵng - Hồ Chí Minh</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Đà Nẵng - Hà Nội" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-HAN.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Đà Nẵng - Hà Nội</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hồ Chí Minh - Thanh Hóa" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-THD.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hồ Chí Minh - Thanh Hóa</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hà Nội - Đà Lạt" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-DLI.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hà Nội - Đà Lạt</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hồ Chí Minh - Vinh" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-VII.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hồ Chí Minh - Vinh</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hồ Chí Minh - Đà Nẵng" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-DAD.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hồ Chí Minh - Đà Nẵng</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hà Nội - Nha Trang" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-CXR.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hà Nội - Nha Trang</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hà Nội - Đà Nẵng" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-DAD.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hà Nội - Đà Nẵng</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hà Nội - Hồ Chí Minh" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-SGN.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hà Nội - Hồ Chí Minh</h3>
                    <br>
                </div>
            </div>
        </div>
        <div class="item-ve-cheap">
            <img alt="Hồ Chí Minh - Hà Nội" src="https://hoabinhairlines.vn/public/frontend/css/images/ve1/ve-gia-re-di-HAN.png" width="100%">
            <div class="des-txt-cheap">
                <div class="txt-top-cheap">
                    <h3>Hồ Chí Minh - Hà Nội</h3>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
<div class="row booking-type bg-white" id="how-buy-pay">
    <div class="col-xs-12 col-sm-12 col-sm-6 p0 pr15">
        <h3 class="tit">
                Mua vé máy bay bằng các hình thức
            </h3>
        <div class="booking-content p0">
            <div class="booking-step">
                <div class="num-st">1.</div>Trực tiếp lên website, nhanh nhất - tiện nhất</div>
            <div class="booking-step step-hotline">
                <div class="num-st">2.</div>Gọi điện thoại cho Hòa Bình Airlines
                <div class="mt10"> <b><i class="fa fa-phone fs20" aria-hidden="true"></i> Tổng đài: <a rel="nofollow" href="tel:0913311911"><span class="txt-orange">0913 311 911 </span></a></b>
                </div>
            </div>
            <div class="booking-step">
                <div class="num-st">3.</div>Đến trực tiếp văn phòng Hòa Bình Airlines
                <div class="row mt10">
                    <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                        <p class="txt-orange"><b>Văn phòng tại Hà Nội</b>
                        </p>
                        <p>29 Đoàn Thị Điểm, Quốc Tử Giám, Đống Đa, HN</p>
                        <p>Tel:+84.939.311.911</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                        <p class="txt-orange"><b>Văn phòng tại Đà Nẵng</b>
                        </p>
                        <p>217 Trần Phú, Hải Châu, Đà Nẵng</p>
                        <p>Tel:+84.913.341.911</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                        <p class="txt-orange"><b>Văn phòng tại Sài gòn</b>
                        </p>
                        <p>5 Hoa Cau, Phú Nhuận, TP.Hồ Chí Minh</p>
                        <p>Tel:+84.967.789.121</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-sm-6 p0 pl15 pl0xs mt15xs">
        <h3 class="tit">
                Các hình thức thanh toán
            </h3>
        <div class="booking-content p0">
            <ul class="wPttt mt15">
                <li class="row m0">
                    <div class="imgPttt">
                        <img class="thumb" src="public/frontend/css/images/hoabinh-airlines-logo.png">
                    </div>
                    <p> <b>THANH TOÁN BẰNG TIỀN MẶT TẠI VĂN PHÒNG HÒA BÌNH AIRLINES</b>
                        <br> <span class="">Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng Hòa Bình Airlines để thanh toán và nhận vé.</span>
                    </p>
                    <div class="clr"></div>
                </li>
                <li class="row m0">
                    <div class="imgPttt">
                        <img class="thumb" src="https://hoabinhairlines.vn/public/frontend/css/images/HouseIcon.png">
                    </div>
                    <p> <b>THANH TOÁN TẠI NHÀ</b>
                        <br> <span>Nhân viên Hòa Bình Airlines sẽ giao vé & thu tiền tại nhà theo địa chỉ Quý khách cung cấp.</span>
                    </p>
                    <div class="clr"></div>
                </li>
                <li class="row m0" id="pament_paypal">
                    <div class="imgPttt">
                        <img class="thumb" src="https://hoabinhairlines.vn/public/frontend/css/images/nganluong.jpeg">
                    </div>
                    <p> <b>THANH TOÁN QUA CỔNG THANH TOÁN ĐIỆN TỬ</b>
                        <br> <span>Quý khách có thể thanh toán ngay (trực tuyến) qua cổng Ngân lượng</span>
                    </p>
                    <div class="clr"></div>
                </li>
                <li class="row m0">
                    <div class="imgPttt">
                        <img class="thumb" src="https://hoabinhairlines.vn/public/frontend/css/images/bank.jpeg">
                    </div>
                    <p> <b>THANH TOÁN QUA CHUYỂN KHOẢN</b>
                        <br> <span>Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, hoặc qua Internet banking.</span>
                    </p>
                    <div class="clr"></div>
                </li>
            </ul>
            <div class="partner txc">
                <img src="https://hoabinhairlines.vn/public/frontend/css/images/PartnerV2.jpeg">
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>    
   </div>
    <div class="clearfix"></div>
    <div class="row m0 relative">
        <div class="border-eva"></div>
        <div class="box-email-km">
            <div class="box580 mt30">

                <div id="register-email-success" class="alert alert-success" style="display: none">Đăng ký nhận email khuyến mãi thành công.</div>

                <div id="register-email-error" class="alert alert-danger" style="display: none">Đăng ký nhận email khuyến mãi lỗi, vui lòng thử lại.</div>

                <div class="clearfix"></div>

                <div class="txt-89 fs20 txc">Đăng ký nhận tin khuyến mãi ngay để không bỏ lỡ các ưu đãi hấp dẫn mới nhất từ <b>Hòa Bình Airlines</b>!</div>

                <div class="form-email mt30 relative">
                    <form id="email_promotion111" role="form" action="{!! route('email.promotion') !!}" method="post">
                        {{ csrf_field() }}
                        <input type="email" class="form-control" placeholder="Nhập email của bạn tại đây" required maxlength="255" name="email_promotion">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <button type="submit" class="btn btn-blue-40 font700"><i class="fa fa-paper-plane" aria-hidden="true"></i> ĐĂNG KÝ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
