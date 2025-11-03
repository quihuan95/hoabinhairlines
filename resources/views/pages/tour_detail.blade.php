
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, initial-scale=1.0, shrink-to-fit=no">
    <title>{{$title}}</title>
    <base href="https://hoabinhairlines.vn/" />
    <link rel='shortcut icon' href='public/frontend/css/images/hoabinh-airlines-logo.png' />
    <link rel="canonical" href="{{$canonical}}"/>
    <meta property="og:image" content="{{$og_image}}"/>
    <meta property="og:image:width" content="720" />
    <meta property="og:image:height" content="480" />

    <meta property="og:url" content="{{$canonical}}">
    <meta property="og:type" content="article" />

    <meta name="subject" content="HoaBinhAirlines">
    <meta name="robots" content="index,follow" />
    <meta name="abstract" content="HoaBinhAirlines">
    <meta name="topic" content="HoaBinhAirlines">
    <meta name="author" content="HoaBinh Airlines">
    <meta name="reply-to" content="info@hoabinhtourist.com">
    <meta name="owner" content="info@hoabinhtourist.com">

    <meta name="title" property="og:title" content="{{$title}}" />
    <meta name="keywords" property="og:keywords" content="{{$keywords}}" />
    <meta name="description" property="og:description" content="{{$description}}" />

    <meta property="fb:app_id" content="221330904972338" />
    <meta property="article:author" content="HoaBinh Airlines" />
    <meta property="article:publisher" content="HoaBinh Airlines" />

    <meta name="fb:page_id" content="sanvemaybaygiare.hoabinhtourist" />
    <meta name="og:email" content="info@hoabinhtourist.com"/>
    <meta name="og:phone_number" content="0913 311 911"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @include('inc/css')

</head>
<body>
    <script>
    var myVar = setInterval(myTimer, 5000);
    function myTimer() {
        $('#popup').css({'display':'block'});
    }
    function myStopFunction() {
        clearInterval(myVar);
    }
    function fnClose() {
        $('#popup').css({'display':'none'});
        clearInterval(myVar);
    }
    var myVar2='';
    var myVar3='';
    var myVar4='';
    $(document).ready(function(){
        $("#mntop_48").hover(function(){
            myVar2= setInterval(fnHH, 3000);
            myVar3= setInterval(fnHH2, 4000);
            myVar4= setInterval(fnHH3, 5000);
        }, function(){
            clearInterval(myVar2);
            clearInterval(myVar3);
            clearInterval(myVar4);
            $('#sub_menu_48').css("display", "none");
            $('#mntop_45').css("height", "0px");
            $('#mntop_46').css("height", "0px");
            $('#mntop_47').css("height", "0px");
        });

        $("#mntop_27").hover(function(){
            $('#sub_menu_27').css("display", "block");
        }, function(){
            $('#sub_menu_27').css("display", "none");
        });
    });
    function fnHH() {
        $('#sub_menu_48').css("display", "block");
        $('#mntop_45').animate({ height: "34px" });
    }
    function fnHH2() {
        $('#mntop_46').animate({ height: "34px" });
    }
    function fnHH3() {
        $('#mntop_47').animate({ height: "34px" });
    }
</script>
<div class="wrapper">
    @include('inc/banner2ben')
    <!-- Header -->
    <div class="header">
        <div class="overlay-body"></div>
        <div class="subheader row m0 hidden-xs hidden-sm">
            <div class="fl"><h1>Mua vé máy bay giá rẻ trực tuyến hàng đầu Việt Nam - Hòa Bình Airlines</h1></div>
        </div>

        <div class="mid-header row m0 p15mb" id="main-nav">
            <div class="fl f_none-mb relative-mb txc-xs header-mb">
                <!-- Site Logo -->
                <a class="" href="/">
                    <img class="logo-header" src="public/frontend/css/images/hoabinh-airlines-logo.png">
                </a>

                <a href="tel:0913 311 911" class="hotline-num visible-xs"><i class="fa fa-phone mr5" aria-hidden="true"></i>0913 311 911</a>
                <button class="btn btn-menu-mb visible-xs visible-sm" data-toggle="modal" data-target="#menuRight">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>

            <div class="hotline f_none-mb hidden-xs">
                <div class="hotline__infor fl_r">
                    <div class="">
                        <div class="fl_l div-td">
                            <div class="txt-tong-dai"><i class="fa fa-phone hidden-xs" aria-hidden="true"></i>TỔNG ĐÀI <b>24/7</b></div>
                            <a class="txt-hotline" href="tel:0913311911">
                                0913 311 911</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar nav-date" id="main-nav-date">
            <i class="fa fa-window-close" aria-hidden="true"></i> <span>ABCD</span>
        </nav>            <div class="menu-header row m0 hidden-xs hidden-sm">
            <ul class="list-menu nav navbar-nav">
                <?php
                $menutop=App\Models\Menus::render_menu();
                echo $menutop;
                ?>
            </ul>
        </div>
    </div>
    <!-- End Header -->
    <!-- Body -->
    <div class="main-content bg-white">
        <div class="content">
            <p class="txt-noti hidden-xs" id="main-notice-support">
                <i class="fa fa-star-o star-shake" aria-hidden="true"></i>
                <i class="fa fa-star-o star-shake" aria-hidden="true"></i>
                Bán vé máy bay & hỗ trợ khách hàng 24/7 tại tất cả tỉnh thành
                <i class="fa fa-star-o star-shake" aria-hidden="true"></i>
                <i class="fa fa-star-o star-shake" aria-hidden="true"></i>
            </p>    <div class="row m0">
                <!-- Column left -->
                <div class="col-xs-12 col-sm-8 mb30 box-content-left">
                    <div class="mt15 box-white">
                        <div class="row m0">
                            <div class="col-xs-12 news-block detail-tour">
                                <h1 class="title-detail-tour">{{$tours_details->title}}</h1>
                                <img src="{{asset('public/uploads/tours/'.$tours_details->images)}}" class="w100p">

                                <div class="info-detail-tour">
                                    <div class="">
                                        <span class="mr30"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$tours_details->times}}</span>
                                        <span class="mr30"><i class="fa fa-plane go" aria-hidden="true"></i> {{$tours_details->poin_from}}</span>
                                        <span class="mr30"><i class="fa fa-plane back" aria-hidden="true"></i> {{$tours_details->poin_to}}</span>
                                        <span class="right">Mã tour: <label>{{$tours_details->tour_code}}</label></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="">
                                        <span class="price"><!-- <i class="fa fa-usd" aria-hidden="true"></i> --> <?php echo number_format($tours_details->price); ?>đ</span>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <ul class="nav nav-tabs tab-tour">
                                    <li class="active"><a data-toggle="tab" href="{{$url_page}}#home">Hành trình</a></li>
                                    <li><a href="{{$url_page}}#menu1">Thông tin</a></li>
                                </ul>

                                <div class="tab-content tab-tour-content">
                                    <div id="home" class="tab-pane fade in active">
                                        {!! $tours_details->about !!}
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        {!! $tours_details->detail !!}
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End  Column left -->
                <div class="col-xs-12 col-sm-4 box-content-right mt15 main-right-bar">
                    <!-- Tab đặt vé máy bay -->
                    <div id="ve_may_bay" class="tab-ve-ks tab-pane fade in active tab-pane1">
                        <div class="box_book_tour">
                            <h3>Book Tour</h3>

                            <div id="alert_book_error" class="alert alert-danger tour-book-alert"></div>
                            <div id="alert_book_success" class="alert alert-success tour-book-alert"></div>

                            <form id="booktourvv" name="booktourvv" action="{!! route('book.tour') !!}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Họ & Tên </label><label class="required">*</label>
                                    <input type="text" name="name" required="required" minlength="2" maxlength="50" class="form-control" placeholder="Nguyễn Văn A" autocomplete="off" title="Vui lòng nhập Họ & Tên." requiredmessage="Vui lòng nhập Họ & Tên." />
                                </div>

                                <div class="form-group">
                                    <label>Điện thoại </label><label class="required">*</label>
                                    <input type="tel" name="tel" pattern="[0-9]{1}[0-9]{9,10}" minlength="10" maxlength="11" required="required" class="form-control" placeholder="0912345678" autocomplete="off" title="Vui lòng nhập chính xác số điện thoại." requiredmessage="Vui lòng nhập chính xác số điện thoại." />
                                </div>

                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" name="email" minlength="6" maxlength="50" class="form-control" placeholder="booktour@gmail.com" autocomplete="off" title="Vui lòng nhập chính xác email." requiredmessage="Vui lòng nhập chính xác email." />
                                </div>

                                <div class="form-group form-date form-tour-book">
                                    <label>Ngày khởi hành </label>
                                    <input name="start_date" id="start_date" value="05/04/2021" class="form-control" placeholder="DD/MM/YYYY" type="datetime" readonly="readonly" />
                                    <i class="fa fa-calendar book" aria-hidden="true"></i>
                                </div>

                                <div class="form-group">
                                    <label>Số người </label>
                                    <br>
                                    <select class="select2 form-control hidden-xs" id="num_people" name="num_people">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>

                                    <div class="right visible-xs">
                                        <button type="button" class="btn btn-math" id="num_people_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                        <span id="people_html">1</span>
                                        <button type="button" class="btn btn-math" id="num_people_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    <input type="hidden" name="people" id="people" value="1" >

                                </div>

                                <input type="hidden" name="tour_id" value="{{$tours_details->id}}">
                                <button type="submit" class="btn btn-book-tour"><i class="fa fa-check"></i> HOÀN TẤT ĐẶT TOUR </button>
                            </form>
                        </div>
                    </div>

                    <div class="box-white mt15 box-tour-question">
                        <h3 class="title">
                            Tại sao chọn tour du lịch tại OnlineBooking    </h3>

                        <div class="content-white pt5 pb5">
                            <ul class="">
                                <li>
                                    <i class="fa fa-search"></i>
                                    <div class="tour-question-text">
                                        <div class="main-text">DỄ DÀNG TÌM KIẾM TOUR</div>
                                        <div class="txt-89">Trên 100 tour phù hợp</div>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-handshake-o"></i>
                                    <div class="">
                                        <div class="main-text">ĐẠI LÝ CHÍNH THỨC</div>
                                        <div class="txt-89">Giá rẻ bất ngờ</div>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-check"></i>
                                    <div class="">
                                        <div class="main-text">ĐẶT TOUR ONLINE HOẶC MOBILE</div>
                                        <div class="txt-89">Xác nhận nhanh chóng</div>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-cc-visa"></i>
                                    <div class="">
                                        <div class="main-text">THANH TOÁN NHANH CHÓNG</div>
                                        <div class="txt-89">Tiện lợi và tin cậy</div>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-user-circle"></i>
                                    <div class="">
                                        <div class="main-text">HỖ TRỢ 24/7</div>
                                        <div class="txt-89">Chăm sóc chu đáo</div>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-paper-plane"></i>
                                    <div class="">
                                        <div class="main-text">SĂN TOUR GIÁ RẺ</div>
                                        <div class="txt-89">Khuyến mại quanh năm</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <br>

                    <!-- Các hình thức thanh toán -->
                    <div class="box-tour-question-pay">
                        <h3 class="title">
                            Các hình thức thanh toán
                        </h3>

                        <div class="booking-content p0">
                            <ul class="wPttt mt15">
                                <li class="row m0">
                                    <div class="icon">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        <b>THANH TOÁN BẰNG TIỀN MẶT TẠI VĂN PHÒNG HOABINH AIRLINES</b><br>
                                        <span class="">Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng HoabinhAirlines để thanh toán và nhận vé.</span>
                                    </p>
                                    <div class="clr"></div>
                                </li>

                                <li class="row m0">
                                    <div class="icon">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        <b>THANH TOÁN TẠI NHÀ</b><br>
                                        <span>Nhân viên HoabinhAirlines sẽ giao vé & thu tiền tại nhà theo địa chỉ Quý khách cung cấp.</span>
                                    </p>
                                    <div class="clr"></div>
                                </li>

                                <li class="row m0" id="pament_paypal">
                                    <div class="icon">
                                        <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        <b>THANH TOÁN QUA CỔNG THANH TOÁN ĐIỆN TỬ</b><br>
                                        <span>Quý khách có thể thanh toán ngay (trực tuyến) qua cổng thanh toán onepay tại website hoabinhairlines.vn</span>
                                    </p>
                                    <div class="clr"></div>
                                </li>

                                <li class="row m0">
                                    <div class="icon">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        <b>THANH TOÁN QUA CHUYỂN KHOẢN</b><br>
                                        <span>Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, hoặc qua Internet banking.</span>
                                    </p>
                                    <div class="clr"></div>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- End Các hình thức thanh toán -->
                    <!--
                    <div class="box-white">
                        <a class="" href="#">
                            <img src="templates/flynow/img/demo/333.jpg" width="100%">
                        </a>
                    </div>
                    -->
                </div>
                <div class="clearfix"></div>

            </div>

</div>
    </div>
    <!-- End Body -->
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


@include('inc/footer')
@include('inc/js')
</body>
</html>
