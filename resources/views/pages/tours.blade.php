
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, initial-scale=1.0, shrink-to-fit=no">

    <title>Tour du lịch - Hòa Bình Airlines</title>
    <base href="https://hoabinhairlines.vn/" />
    <link rel='shortcut icon' href='public/frontend/css/images/hoabinh-airlines-logo.png' />

    <link rel="canonical" href="https://hoabinhairlines.vn/tours"/>
    <meta property="og:image" content="public/frontend/css/images/hoabinh-airlines-logo.png"/>
    <meta property="og:image:width" content="720" />
    <meta property="og:image:height" content="480" />

    <meta property="og:url" content="http://hoabinhairlines.vn/">
    <meta property="og:type" content="article" />


    <meta name="subject" content="Hoabinh Airlines">
    <meta name="robots" content="index,follow" />
    <meta name="abstract" content="Hoabinh Airlines">
    <meta name="topic" content="Hoabinh Airlines">
    <meta name="author" content="HoaBinh Airlines">
    <meta name="reply-to" content="HoaBinh Airlines">
    <meta name="owner" content="HoaBinh Airlines">

    <meta name="title" property="og:title" content="Tour du lịch - Hoabinh Airlines" />
    <meta name="keywords" property="og:keywords" content="" />
    <meta name="description" property="og:description" content="Tour du lịch - Hoabinh Airlines" />

    <meta property="fb:app_id" content="221330904972338" />
    <meta property="article:author" content="HoaBinh Airlines" />
    <meta property="article:publisher" content="HoaBinh Airlines" />

    <meta name="fb:page_id" content="sanvemaybaygiare.hoabinhtourist" />
    <meta name="og:email" content="Hoabinh Airlines"/>
    <meta name="og:phone_number" content="0913 311 911"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @include('inc/css')
</head>
<body>
<div class="wrapper">
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


@include('inc.banner2ben')

    <!-- Header -->
    <div class="header">
        <div class="overlay-body"></div>
        <div class="subheader row m0 hidden-xs hidden-sm">
            <div class="fl"><p>Mua vé máy bay giá rẻ trực tuyến hàng đầu Việt Nam - Hòa Bình Airlines</p></div>
            <!--    <div class="fr">
                    <div class="txr">
                        <a class="btn btn-td" target="_blank" href="">
                            <i class="icon-add-user fa fa-user-plus"></i>
                            Đăng nhập
                        </a>
                    </div>
                </div>-->
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
                                0913 311 911                    </a>
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

        </div>        </div>
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
            </p><div class="news">
                <div class="row m0 pt0xs">

                    <div class="col-xs-12 col-sm-12 mt15">
                        <div class="box-search-tour">

                            <h1>Hơn 300 tours du lịch ở Việt Nam và Quốc tế<i class="fa fa-paper-plane"></i></h1>
                            <p style="color: #ffffff;font-size: 18px;">Bạn muốn đi du lịch đến</p>

                            <!-- <div>Tìm Tour</div> -->
                            <form data-toggle="validator" action="/tours" method="post" id="form-search-tours">
                                <div class="input-group box-search-tours">
                                    <input type="text" name="keyword" class="form-control" placeholder="Tên thành phố, khu vực ..." aria-label="Tên thành phố, khu vực ..." value="" id="input-search-tours" autocomplete="off">
                                    <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button>
              </span>

                                    <!--<div class="box-select-option box-select-option-tour">
                                        <button class="btn btn-close close1 visible-xs" type="button">
                                            <b class="visible-xs"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                                        </button>

                                        <div class="div-in-search">
                                            <div class="title-mb visible-xs">ĐỊA ĐIỂM HOT </div>
                                        </div>

                                        <div class="row scroll-touch tours-search-content">

                                            <div class="hot-tours-txt hidden-xs"><i class="fa fa-location-arrow" aria-hidden="true"></i> ĐỊA ĐIỂM HOT </div>

                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=an do"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507377353-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Ấn Độ</p>
                                                    <a rel="nofollow" href="/tours?destination=an do"><b>1</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=bangkok"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507377640-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Bangkok</p>
                                                    <a rel="nofollow" href="/tours?destination=bangkok"><b>1</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=ha giang"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507378708-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Hà Giang</p>
                                                    <a rel="nofollow" href="/tours?destination=ha giang"><b>2</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=hawaii"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507381612-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Hawaii</p>
                                                    <a rel="nofollow" href="/tours?destination=hawaii"><b>2</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=hongkong"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507379894-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Hongkong</p>
                                                    <a rel="nofollow" href="/tours?destination=hongkong"><b>2</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=phap"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507385065-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>PHÁP</p>
                                                    <a rel="nofollow" href="/tours?destination=phap"><b>2</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=phu quoc"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507382364-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Phú Quốc</p>
                                                    <a rel="nofollow" href="/tours?destination=phu quoc"><b>1</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=da lat"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507380722-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Đà Lạt</p>
                                                    <a rel="nofollow" href="/tours?destination=da lat"><b>2</b> Tours</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4 p0">
                                                <a rel="nofollow" href="/tours?destination=da nang"><img class="img-search-tour" src="https://img.webbanve.net/photos/resized/80x80/1397-1507377664-Hoabinh Airlines.png" onerror="this.src='/templates/assets/img/no-image.png'"></a>
                                                <div class="tours-info">
                                                    <p>Đà Nẵng</p>
                                                    <a rel="nofollow" href="/tours?destination=da nang"><b>2</b> Tours</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>-->

                                </div>
                            </form>
                        </div>
                    </div>


                    @foreach($tours_catalog as $k=>$v)
                    <div class="col-xs-12 col-sm-12 mt15 tour-news-box">
                        <div class="box-white news2">
                            <div class="title-tour">
                                <h2>{{$v->title}}</h2>
                                <!--<a rel="nofollow" href="/tours/{{$v->slug}}">
                                    Xem thêm Tour <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>-->
                            </div>

                            <div class="content-white">
                                <div class="row row-8">
                                    <?php
                                    $list_tours=App\Models\Tours::list_tours($v->id);
                                    echo $list_tours;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

                <div style="padding: 10px 0">
                    <div class="loading"></div>
                </div>

                
            </div>
        </div>

        <!-- End Body -->


@include('inc/footer')
@include('inc/js')
</body>
</html>
