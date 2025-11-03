
<?php
$uri = $_SERVER['REQUEST_URI'];
//echo $uri; //Outputs: URI

$query = $_SERVER['QUERY_STRING'];
//echo $query; //Outputs: Query String

$domain = $_SERVER['HTTP_HOST'];
//echo $domain; //Outputs: HOST

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, initial-scale=1.0, shrink-to-fit=no">

    <title>Trang báo lỗi 404</title>
    
    <link rel="shortcut icon" href="https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png" />
    <link rel="canonical" href="<?php echo $url;?>"/>
    <meta name="robots" content="index,follow" />
    <!------>
    <meta name="subject" content="Vé máy bay giá rẻ trực tuyến HoaBinh Airlines">
    
    <meta name="abstract" content="Vé máy bay giá rẻ trực tuyến HoaBinh Airlines">
    <meta name="topic" content="Vé máy bay giá rẻ trực tuyến HoaBinh Airlines">
    <meta name="author" content="HoaBinh Airlines">
    <meta name="reply-to" content="HoaBinh Airlines">
    <meta name="owner" content="HoaBinh Airlines">

    <meta name="title" property="og:title" content="Vé máy bay giá rẻ trực tuyến HoaBinh Airlines" />
    <meta name="keywords" property="og:keywords" content="vé máy bay, vé máy bay giá rẻ, HoaBinh Airlines" />
    <meta name="description" property="og:description" content="Vé máy bay giá rẻ với thương hiệu HoaBinh Airlines lấy chất lượng làm nên uy tín. Liên kết với 3 hãng hàng không lớn tại Việt Nam sẽ không làm bạn thất vọng." />

    <meta property="article:author" content="HoaBinh Airlines" />
    <meta property="article:publisher" content="HoaBinh Airlines" />


    <meta property="og:title" content="Vé máy bay giá rẻ trực tuyến HoaBinh Airlines"/>
    <meta property="og:description" content="Vé máy bay giá rẻ với thương hiệu HoaBinh Airlines lấy chất lượng làm nên uy tín. Liên kết với 3 hãng hàng không lớn tại Việt Nam sẽ không làm bạn thất vọng."/>
    <meta property="og:image" content="https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png"/>
    <meta property="og:image:width" content="720" />
    <meta property="og:image:height" content="480" />
    <meta property="og:locale" content="vi" />
    <meta property="og:url" content="https://hoabinhairlines.vn/404.html">
    <meta property="og:type" content="Vé máy bay giá rẻ HoaBinh Airlines" />
    <!------>
    

    <meta name="fb:page_id" content="sanvemaybaygiare.hoabinhtourist" />
    <meta name="fb:app_id" content="125686319174086" />
    <meta name="og:email" content="info@hoabinhtourist.com"/>
    <meta name="og:phone_number" content="0913 311 911"/>
    <!-- CSS plugin-->
    @include('inc/css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <script>
    //var myVar = setInterval(myTimer, 5000);
    function myTimer() {
        /*$('#popup').css({'display':'block'});*/
        $("#myModal").modal();
        fnClose();
    }
    function myStopFunction() {
        clearInterval(myVar);
    }
    function fnClose() {
        //$('#popup').css({'display':'none'});
        clearInterval(myVar);
    }
    /*var myVar2='';
    var myVar3='';
    var myVar4='';
    $(document).ready(function(){
        $("#mntop_48").hover(function(){
            myVar2= setInterval(fnHH, 1000);
            myVar4= setInterval(fnHH3, 2000);
            myVar3= setInterval(fnHH2, 3000);
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
    }*/
</script>


<div class="wrapper">
    @include('inc.banner2ben')
    <!-- Header -->
    <div class="header">
        <div class="overlay-body"></div>
        <div class="subheader row m0 hidden-xs hidden-sm">
            <div class="fl"><p>Vé máy bay giá rẻ HoaBinh Airlines</p></div>
        </div>

        <div class="mid-header row m0 p15mb" id="main-nav">
            <div class="fl f_none-mb relative-mb txc-xs header-mb">
                <!-- Site Logo -->
                <a class="" href="/">
                    <img width="150px" height="100px" class="logo-header" src="https://hoabinhairlines.vn/public/frontend/css/images/hoabinh-airlines-logo.png">
                </a>
            
                <a href="tel:0913311911" class="hotline-num visible-xs"><i class="fa fa-phone mr5" aria-hidden="true"></i>0913 311 911</a>
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
            <p>&nbsp;</p>
            <style type="text/css">
                .tab-ve-ks .nav-tabs>li {
                    width: calc(100%/2) !important;
                }
                .tab-text-xs {
                    display: block;
                    font-size: 13px;
                }
                .tab-ve-ks .nav-tabs>li.active:before {
                    border-width: 62px 0px 0px 6px;
                    top:1px;
                }
                .tab-ve-ks .nav-tabs>li.tab2.active:before,
                .tab-ve-ks .nav-tabs>li.tab3.active:before,
                .tab-ve-ks .nav-tabs>li.tab4.active:before,
                .tab-ve-ks .nav-tabs>li.tab5.active:before,
                .tab-ve-ks .nav-tabs>li.tab6.active:before
                {
                    left: -29px;
                    border-width: 62px 11px 0px 18px;
                    border-color: transparent #0776ad transparent transparent;
                }

                @media (max-width: 992px){
                }

                @media (max-width: 767px){
                    .tab-text-xs {
                        font-size: 11px;
                    }
                    .tab-ve-ks .nav-tabs>li.active:before {
                        border-width: 57px 0px 0px 7px;
                    }
                    .tab-ve-ks .nav-tabs>li.tab2.active:before {
                        border-width: 57px 12px 0px 18px;
                    }
                }
            </style>



            <main><style>ul li{list-style-type: none;}.content-box{ padding: 20px; }#content{display: none;}</style><section class="error-section centred"><div class="auto-container"><div class="content-box"><h1>Trang báo lỗi 404</h1><h2>Có lỗi! Trang không thể tìm thấy.</h2><div class="text">Không thể tìm thấy những gì bạn cần? Hãy dành một chút thời gian và thực hiện tìm kiếm bên dưới hoặc bắt đầu từ <a rel="dofollow" href="/">Trang chủ.</a></div></div></div></section><div class="container"><div class="row"><div id="content" class="text-center"><h4>This may have occurred because of several reasons</h4><ul><li>The page you requested does not exist.</li><li>The link you clicked is no longer.</li><li>The page may have moved to a new location.</li><li>An error may have occurred.</li><li>You are not authorized to view the requested resource.</li></ul></div></div></div></main>

        </div>
    </div>
    <!-- End Body -->


    @include('inc/footer')

        
        <script src="{{asset('public/frontend/js/jquery_compressed.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/toctoc.js')}}"></script>
        <script>
            $(document).ready(function() {
                $.toctoc({
                    minimized: false
                });
            });
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

