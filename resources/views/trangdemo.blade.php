@extends('layouthome')
@section('content')
    {{ csrf_field() }}

    <div class="row m0 p0xs p15mb">
        <div class="col-xs-12 col-sm-12 col-md-6 p0 pr0xs">
            <!-- Box Tab Vé máy bay/Khách sạn -->
            <div class="tab-ve-ks">
                <link rel="stylesheet" href="{{asset('public/frontend/css/abay_hotel.css')}}">
                <ul class="nav nav-tabs">

                    <li class="active tab1"><a data-toggle="tab" href="#ve_may_bay"><i class="fa fa-paper-plane" aria-hidden="true"></i><span class="tab-text-xs">Vé máy bay</span></a></li>




                    <li class="tab5"><a href="/tours"><i class="fa fa-tumblr-square" aria-hidden="true"></i><span class="tab-text-xs">Tours</span></a></li>


                </ul>

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
                                                <input type="text" placeholder="Nhập tên thành phố hoặc mã sân bay" class="form-control typeahead input-flight" id="city_name_go" name="city_name_go" value="">
                                                <div id="countryList"></div>
                                                <button class="btn btn-orange-34 hidden-xs btn-choice-area">CHỌN</button>
                                            </div>

                                        </div>
                                        <div class="row scroll-touch">
                                            <div class="kv-noi-dia row m0">
                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>MIỀN BẮC</h3>
                                                    <ul class="">
                                                        <li class="item-diem-di" data-code="HAN">Hà Nội</li>
                                                        <li class="item-diem-di" data-code="HPH">Hải Phòng</li>
                                                        <li class="item-diem-di" data-code="DIN">Điện Biên Phủ</li>
                                                        <li class="item-diem-di" data-code="VDO">Vân Đồn</li>
                                                    </ul>
                                                    <h3>MIỀN NAM</h3>
                                                    <ul>
                                                        <li class="item-diem-di" data-code="SGN">Hồ Chí Minh</li>
                                                        <li class="item-diem-di" data-code="PQC">Phú Quốc</li>
                                                        <li class="item-diem-di" data-code="CAH">Cà Mau</li>
                                                        <li class="item-diem-di" data-code="VCA">Cần Thơ</li>
                                                        <li class="item-diem-di" data-code="VCS">Côn Đảo</li>
                                                        <li class="item-diem-di" data-code="VKG">Kiên Giang</li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>MIỀN TRUNG</h3>
                                                    <ul class="">

                                                        <li class="item-diem-di" data-code="DAD">Đà Nẵng</li>
                                                        <li class="item-diem-di" data-code="CXR">Nha Trang</li>
                                                        <li class="item-diem-di" data-code="DLI">Đà Lạt</li>
                                                        <li class="item-diem-di" data-code="HUI">Huế</li>
                                                        <li class="item-diem-di" data-code="BMV">Ban Mê Thuột</li>
                                                        <li class="item-diem-di" data-code="PXU">PleiKu</li>
                                                        <li class="item-diem-di" data-code="TBB">Phú Yên</li>
                                                        <li class="item-diem-di" data-code="THD">Thanh Hóa</li>
                                                        <li class="item-diem-di" data-code="UIH">Qui Nhơn</li>
                                                        <li class="item-diem-di" data-code="VCL">Chu Lai</li>
                                                        <li class="item-diem-di" data-code="VDH">Quảng Bình</li>
                                                        <li class="item-diem-di" data-code="VII">Vinh</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="kv-quoc-te row m0">

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>CHÂU Á</h3>
                                                    <ul>
                                                        <li class="item-diem-di" data-code="BKK">Băng Cốc</li>
                                                        <li class="item-diem-di" data-code="CAN">Quảng Châu</li>
                                                        <li class="item-diem-di" data-code="HKG">Hồng Kông</li>
                                                        <li class="item-diem-di" data-code="KUL">Kuala Lumpur</li>
                                                        <li class="item-diem-di" data-code="ICN">Seoul, Incheon</li>
                                                        <li class="item-diem-di" data-code="SHA">Thượng Hải</li>
                                                        <li class="item-diem-di" data-code="SIN">Singapore</li>
                                                        <li class="item-diem-di" data-code="TPE">Đài Bắc</li>
                                                        <li class="item-diem-di" data-code="TYO">Tokyo</li>
                                                        <li class="item-diem-di" data-code="KOS">Campuchia</li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>CHÂU ÂU</h3>
                                                    <ul>
                                                        <li class="item-diem-di" data-code="AMS">Amsterdam</li>
                                                        <li class="item-diem-di" data-code="CPH">Cô-pen-ha-gen</li>
                                                        <li class="item-diem-di" data-code="FRA">Frankfurt</li>
                                                        <li class="item-diem-di" data-code="LON">London</li>
                                                        <li class="item-diem-di" data-code="PAR">Paris</li>
                                                        <li class="item-diem-di" data-code="PRG">Praha</li>
                                                        <li class="item-diem-di" data-code="STO">Stockholm</li>
                                                        <li class="item-diem-di" data-code="ZRH">Zurich</li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>CHÂU ÚC & MỸ</h3>
                                                    <ul>
                                                        <li class="item-diem-di" data-code="DFW">Dallas</li>
                                                        <li class="item-diem-di" data-code="HOU">Houston</li>
                                                        <li class="item-diem-di" data-code="LAX">Los Angeles</li>
                                                        <li class="item-diem-di" data-code="MEL">Men-bơn</li>
                                                        <li class="item-diem-di" data-code="NYC">New York</li>
                                                        <li class="item-diem-di" data-code="SFO">San Francisco</li>
                                                        <li class="item-diem-di" data-code="SYD">Sydney</li>
                                                        <li class="item-diem-di" data-code="YTO">Toronto</li>
                                                        <li class="item-diem-di" data-code="YVR">Vancouver</li>
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
                                    <!-- Box Hidden -->
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
                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>MIỀN BẮC</h3>
                                                    <ul class="">
                                                        <li class="item-diem-den" data-code="HAN">Hà Nội</li>
                                                        <li class="item-diem-den" data-code="HPH">Hải Phòng</li>
                                                        <li class="item-diem-den" data-code="DIN">Điện Biên Phủ</li>
                                                        <li class="item-diem-den" data-code="VDO">Vân Đồn</li>
                                                    </ul>
                                                    <h3>MIỀN NAM</h3>
                                                    <ul>
                                                        <li class="item-diem-den" data-code="SGN">Hồ Chí Minh</li>
                                                        <li class="item-diem-den" data-code="PQC">Phú Quốc</li>
                                                        <li class="item-diem-den" data-code="CAH">Cà Mau</li>
                                                        <li class="item-diem-den" data-code="VCA">Cần Thơ</li>
                                                        <li class="item-diem-den" data-code="VCS">Côn Đảo</li>
                                                        <li class="item-diem-den" data-code="VKG">Kiên Giang</li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>MIỀN TRUNG</h3>
                                                    <ul class="">
                                                        <li class="item-diem-den" data-code="DAD">Đà Nẵng</li>
                                                        <li class="item-diem-den" data-code="CXR">Nha Trang</li>
                                                        <li class="item-diem-den" data-code="DLI">Đà Lạt</li>
                                                        <li class="item-diem-den" data-code="HUI">Huế</li>
                                                        <li class="item-diem-den" data-code="BMV">Ban Mê Thuột</li>
                                                        <li class="item-diem-den" data-code="PXU">PleiKu</li>
                                                        <li class="item-diem-den" data-code="TBB">Phú Yên</li>
                                                        <li class="item-diem-den" data-code="THD">Thanh Hóa</li>
                                                        <li class="item-diem-den" data-code="UIH">Qui Nhơn</li>
                                                        <li class="item-diem-den" data-code="VCL">Chu Lai</li>
                                                        <li class="item-diem-den" data-code="VDH">Quảng Bình</li>
                                                        <li class="item-diem-den" data-code="VII">Vinh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kv-quoc-te row m0">

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>CHÂU Á</h3>
                                                    <ul>
                                                        <li class="item-diem-den" data-code="BKK">Băng Cốc</li>
                                                        <li class="item-diem-den" data-code="CAN">Quảng Châu</li>
                                                        <li class="item-diem-den" data-code="HKG">Hồng Kông</li>
                                                        <li class="item-diem-den" data-code="KUL">Kuala Lumpur</li>
                                                        <li class="item-diem-den" data-code="ICN">Seoul, Incheon</li>
                                                        <li class="item-diem-den" data-code="SHA">Thượng Hải</li>
                                                        <li class="item-diem-den" data-code="SIN">Singapore</li>
                                                        <li class="item-diem-den" data-code="TPE">Đài Bắc</li>
                                                        <li class="item-diem-den" data-code="TYO">Tokyo</li>
                                                        <li class="item-diem-den" data-code="KOS">Campuchia</li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>CHÂU ÂU</h3>
                                                    <ul>
                                                        <li class="item-diem-den" data-code="AMS">Amsterdam</li>
                                                        <li class="item-diem-den" data-code="CPH">Cô-pen-ha-gen</li>
                                                        <li class="item-diem-den" data-code="FRA">Frankfurt</li>
                                                        <li class="item-diem-den" data-code="LON">London</li>
                                                        <li class="item-diem-den" data-code="PAR">Paris</li>
                                                        <li class="item-diem-den" data-code="PRG">Praha</li>
                                                        <li class="item-diem-den" data-code="STO">Stockholm</li>
                                                        <li class="item-diem-den" data-code="ZRH">Zurich</li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                    <h3>CHÂU ÚC & MỸ</h3>
                                                    <ul>
                                                        <li class="item-diem-den" data-code="DFW">Dallas</li>
                                                        <li class="item-diem-den" data-code="HOU">Houston</li>
                                                        <li class="item-diem-den" data-code="LAX">Los Angeles</li>
                                                        <li class="item-diem-den" data-code="MEL">Men-bơn</li>
                                                        <li class="item-diem-den" data-code="NYC">New York</li>
                                                        <li class="item-diem-den" data-code="SFO">San Francisco</li>
                                                        <li class="item-diem-den" data-code="SYD">Sydney</li>
                                                        <li class="item-diem-den" data-code="YTO">Toronto</li>
                                                        <li class="item-diem-den" data-code="YVR">Vancouver</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Box Hidden -->

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

                            <div class="col-xs-6 col-sm-6 col-md-6 date-go">
                                <div class="form-group form-date">
                                    <div class="label-control">
                                        Ngày đi
                                        <!-- <i class="fa fa-blind icon-go-per" aria-hidden="true"></i> -->
                                    </div>
                                    <label class="control-label" for="date_di"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                    <input class="form-control" id="date_di" name="date_di" placeholder="DD/MM/YYYY" type="datetime" readonly="readonly" value="30/03/2021"/>
                                </div>

                                <div class="form-group">
                                    <label class="lunar-calendar lunar-go">Âm lịch: Thứ bảy x/x</label>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 date-return">
                                <div class="form-group form-date">
                                    <div class="label-control">
                                        Ngày về
                                        <!-- <i class="fa fa-blind icon-go-per rtX180" aria-hidden="true"></i> -->
                                    </div>
                                    <label class="control-label" for="date_ve">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </label>
                                    <input class="form-control" id="date_ve" name="date_ve" placeholder="DD/MM/YYYY" type="datetime" readonly="readonly" value="02/04/2021" />

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
                                        <option value="032021">03/2021</option>
                                        <option value="042021">04/2021</option>
                                        <option value="052021">05/2021</option>
                                        <option value="062021">06/2021</option>
                                        <option value="072021">07/2021</option>
                                        <option value="082021">08/2021</option>
                                        <option value="092021">09/2021</option>
                                        <option value="102021">10/2021</option>
                                        <option value="112021">11/2021</option>
                                        <option value="122021">12/2021</option>
                                        <option value="012022">01/2022</option>
                                        <option value="022022">02/2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 box-search-month" id="box-search-month-back">
                                <div class="form-group form-months">
                                    <div class="label-control">
                                        Tháng về
                                    </div>
                                    <select class="select2 form-control search-month" name="select-search-month-back">
                                        <option value="032021">03/2021</option>
                                        <option value="042021">04/2021</option>
                                        <option value="052021">05/2021</option>
                                        <option value="062021">06/2021</option>
                                        <option value="072021">07/2021</option>
                                        <option value="082021">08/2021</option>
                                        <option value="092021">09/2021</option>
                                        <option value="102021">10/2021</option>
                                        <option value="112021">11/2021</option>
                                        <option value="122021">12/2021</option>
                                        <option value="012022">01/2022</option>
                                        <option value="022022">02/2022</option>
                                    </select>
                                </div>
                            </div>

                            <!--        <div class="col-xs-12 txt-orange ">Âm lịch: Thứ 6 ngày 12 tháng 7</div>-->
                        </div>

                        <div class="num-ve">
                            <div class="hidden-xs hidden-sm">
                                <table>
                                    <tr>
                                        <td>Người lớn<i class="fa fa-male" aria-hidden="true"></i></td>
                                        <td class="h-select">
                                            <select class="select2 form-control" id="num-adault">
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
                                            <select class="select2 form-control" id="num-child">
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
                                            <select class="select2 form-control" id="num-baby">
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
                                <a class="txt-white underline " href="pages/huong-dan-dat-ve">
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                    Xem hướng dẫn
                                </a>
                            </div>
                            <div class="box-btn-search fr w100p-xs txc-xs">
                                <button class="btn btn-tim-ve" href="#">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    TÌM CHUYẾN BAY
                                </button>
                                <input type="hidden" name="partner" id="partner" value="datacom" />
                                <input type="hidden" name="product_key" id="product_key" value="yvlf7o7mg1j6lhk" />
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End Box Tab Vé máy bay/Khách sạn -->

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 p0 pl10 pl0xs mt15xs hidden-xs hidden-sm">
            <!-- Slider -->
            <div class="box-content-slider">
                <div class="slider-ads">
                    @foreach($banners as $kb=>$vb)
                        <a class="item-slider" href="{{$vb->redirect}}">
                            <img src="{{ asset('public/uploads/banner/'.$vb->src) }}" alt="{{$vb->name}}" width="100%" >
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- End Slider -->            <!-- Vé máy bay giá rẻ -->
            <div class="box-slider-lastest-news">
                <div class="slider-lastest-news">
                    <div class="item-ve">
                        <img src="{{asset('public/frontend/css/images/ha-noi-phu-quoc-min.jpg')}}" width="100%">
                    </div>
                    <div class="item-ve">
                        <img src="{{asset('public/frontend/css/images/ha-noi-da-nang-hoi-an-min.jpg')}}" width="100%">
                    </div>
                    <div class="item-ve">
                        <img src="{{asset('public/frontend/css/images/Hanoi-Daocatba-Vinhlanha.jpg')}}" width="100%">
                    </div>
                <!--@foreach($news_spec as $ks=>$vs)
                    <div class="item-ve">
                        <a href="{{$vs->slug}}">
                                <img src="{{asset('public/uploads/news/'.$vs->picture)}}" width="100%">
                                <div class="des-txt">
                                    <div class="txt-top" style="line-height: 21px; right: 10px;">
                                        {{$vs->title}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach-->
                </div>
            </div>
            <!-- End Vé máy bay giá rẻ -->        </div>
    </div>


    <div class="clearfix"></div>

    <div class="row booking-type bg-white" id="how-buy-pay">
        <!-- Hình thức mua -->
        <div class="col-xs-12 col-sm-12 col-sm-12 p0 pr15">
            <h2 class="tit" style="margin-bottom: 0px!important;">
                Giới thiệu
            </h2>

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



        <!-- End Các hình thức thanh toán -->    </div>
    <!-- End Mua & Thanh toán vé  -->
    <div class="clearfix"></div>
    <div class="row booking-type" id="cheap-flight">
        <h2 class="tit">Vé máy bay giá rẻ</h2>

        <div class="slider-ve-re">

            <div class="item-ve-cheap">
                <a rel="nofollow" href="{{URL::to('flight?Request=HANPQC31052021-1-0-0')}}">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-PQC.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hà Nội - Phú Quốc</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a rel="nofollow" href="{{URL::to('flight?Request=DADSGN31052021-1-0-0')}}">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-SGN.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Đà Nẵng - Hồ Chí Minh</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a rel="nofollow" href="{{URL::to('flight?Request=DADHAN31052021-1-0-0')}}">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-HAN.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Đà Nẵng - Hà Nội</h3><br></div>

                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=SGNTHD31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-THD.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hồ Chí Minh - Thanh Hóa</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=HANDLI31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-DLI.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hà Nội - Đà Lạt</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=SGNVII31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-VII.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hồ Chí Minh - Vinh</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=SGNDAD31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-DAD.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hồ Chí Minh - Đà Nẵng</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=HANCXR31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-CXR.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hà Nội - Nha Trang</h3><br></div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=HANDAD31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-DAD.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hà Nội - Đà Nẵng</h3><br></div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=HANSGN31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-SGN.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hà Nội - Hồ Chí Minh</h3><br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item-ve-cheap">
                <a href="{{URL::to('flight?Request=SGNHAN31052021-1-0-0')}}" rel="nofollow">
                    <img src="{{asset('public/frontend/css/images/ve1/ve-gia-re-di-HAN.png')}}" width="100%">
                    <div class="des-txt-cheap">
                        <div class="txt-top-cheap">
                            <h3>Hồ Chí Minh - Hà Nội</h3><br>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!--    -->    <!-- Mua & Thanh toán vé  -->
    <div class="row booking-type bg-white" id="how-buy-pay">
        <!-- Hình thức mua -->
        <div class="col-xs-12 col-sm-12 col-sm-6 p0 pr15">
            <h3 class="tit">
                Mua vé máy bay bằng các hình thức
            </h3>

            <div class="booking-content p0">
                <div class="booking-step">
                    <div class="num-st">1.</div>
                    Trực tiếp lên website, nhanh nhất - tiện nhất
                </div>

                <div class="booking-step">
                    <div class="num-st">2.</div>
                    Qua chat trực tuyến (bấm icon để mở)

                    <div class="chat-form">
                        <a href="javascript:void(Tawk_API.toggle())">
                            <img src="{{asset('public/frontend/css/images/livechat.png')}}" width="50">
                        </a>
                        <a href="http://m.me/sanvemaybaygiare.hoabinhtourist" target="_blank">
                            <img src="{{asset('public/frontend/css/images/messenger.png')}}" width="48">
                        </a>

                        <a href="skype:thanhls1987?chat" class="" target="_blank" rel="nofollow">
                            <i class="fa fa-skype icon-skype" aria-hidden="true"></i>
                        </a>

                        <a href="http://zalo.me/0913311911" class="" target="_blank">
                            <img src="{{asset('public/frontend/css/images/zalo.jpeg')}}" width="35px">
                        </a>



                    </div>
                </div>

                <div class="booking-step step-hotline">
                    <div class="num-st">3.</div>
                    Gọi điện thoại cho HoaBinh Airlines
                    <div class="mt10">
                        <b><i class="fa fa-phone fs20" aria-hidden="true"></i> Tổng đài: <a href="tel:0913311911"><span class="txt-orange">0913 311 911 </span></a></b>
                    </div>



                </div>

                <div class="booking-step">
                    <div class="num-st">4.</div>
                    Đến trực tiếp văn phòng HoaBinh Airlines
                    <div class="row mt10">
                        <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                            <p class="txt-orange"><b>Văn phòng tại Hà Nội</b></p>
                            <p>29 Đoàn Thị Điểm, Quốc Tử Giám, Đống Đa, HN</p>
                            <p>Tel:+84.24.3682.29.29</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                            <p class="txt-orange"><b>Văn phòng tại Đà Nẵng</b></p>
                            <p>217 Trần Phú, Hải Châu, Đà Nẵng</p>
                            <p>Tel:+84.913.186.829</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 p0 location-details">
                            <p class="txt-orange"><b>Văn phòng tại Sài gòn</b></p>
                            <p>5 Hoa Cau, Phú Nhuận, TP.Hồ Chí Minh</p>
                            <p>Tel:+84.905.388.666</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Hình thức mua -->
        <!-- Các hình thức thanh toán -->
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
                        <p>
                            <b>THANH TOÁN BẰNG TIỀN MẶT TẠI VĂN PHÒNG HÒA BÌNH AIRLINES</b><br>
                            <span class="">Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng HoaBinh Airlines để thanh toán và nhận vé.</span>
                        </p>
                        <div class="clr"></div>
                    </li>

                    <li class="row m0">
                        <div class="imgPttt">
                            <img class="thumb" src="{{asset('public/frontend/css/images/HouseIcon.png')}}">
                        </div>
                        <p>
                            <b>THANH TOÁN TẠI NHÀ</b><br>
                            <span>Nhân viên HoaBinh Airlines sẽ giao vé & thu tiền tại nhà theo địa chỉ Quý khách cung cấp.</span>
                        </p>
                        <div class="clr"></div>
                    </li>

                    <li class="row m0" id="pament_paypal">
                        <div class="imgPttt">
                            <img class="thumb" src="{{asset('public/frontend/css/images/nganluong.jpeg')}}">
                        </div>
                        <p>
                            <b>THANH TOÁN QUA CỔNG THANH TOÁN ĐIỆN TỬ</b><br>
                            <span>Quý khách có thể thanh toán ngay (trực tuyến) qua cổng Ngân lượng</span>
                        </p>
                        <div class="clr"></div>
                    </li>

                    <li class="row m0">
                        <div class="imgPttt">
                            <img class="thumb" src="{{asset('public/frontend/css/images/bank.jpeg')}}">
                        </div>
                        <p>
                            <b>THANH TOÁN QUA CHUYỂN KHOẢN</b><br>
                            <span>Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, hoặc qua Internet banking.</span>
                        </p>
                        <div class="clr"></div>
                    </li>
                </ul>
                <div class="partner txc">
                    <img src="{{asset('public/frontend/css/images/PartnerV2.jpeg')}}">
                </div>
            </div>
        </div>
        <!-- End Các hình thức thanh toán -->    </div>
    <!-- End Mua & Thanh toán vé  -->



    <div class="clearfix"></div>
    <!-- End Khách hàng nói về chúng tôi -->
    <!-- List  -->
    @include('inc.menu_footer')
    <!-- List  -->
    <div class="clearfix"></div>
    <div class="row m0 relative">
        <div class="border-eva"></div>
        <div class="box-email-km">
            <div class="box580 mt30">

                <div id="register-email-success" class="alert alert-success" style="display: none">Đăng ký nhận email khuyến mãi thành công.</div>

                <div id="register-email-error" class="alert alert-danger" style="display: none">Đăng ký nhận email khuyến mãi lỗi, vui lòng thử lại.</div>

                <div class="clearfix"></div>

                <div class="txt-89 fs20 txc">Đăng ký nhận tin khuyến mãi ngay để không bỏ lỡ các ưu đãi hấp dẫn mới nhất từ <b>HoaBinh Airlines</b>!</div>

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
