<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>
    
    <link rel="shortcut icon" href="https://cdn.hoabinhevents.com/profiles/favicon-1.ico" />
    <link rel="canonical" href="{{$canonical}}"/>
    <meta name="robots" content="index,follow" />
    <!------>
    <meta name="subject" content="{{$title}}">
    
    <meta name="abstract" content="{{$title}}">
    <meta name="topic" content="{{$title}}">
    <meta name="author" content="HoaBinh Airlines">
    <meta name="reply-to" content="HoaBinh Airlines">
    <meta name="owner" content="HoaBinh Airlines">

    <meta name="title" property="og:title" content="{{$title}}" />
    <meta name="keywords" property="og:keywords" content="{{$keywords}}" />
    <meta name="description" property="og:description" content="{{$description}}" />

    <meta property="article:author" content="HoaBinh Airlines" />
    <meta property="article:publisher" content="HoaBinh Airlines" />

    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{$description}}"/>
    <meta property="og:image" content="{{$og_image}}"/>
    <meta property="og:image:width" content="720" />
    <meta property="og:image:height" content="480" />
    <meta property="og:locale" content="vi" />
    <meta property="og:url" content="{{$canonical}}">
    <meta property="og:type" content="Vé máy bay giá rẻ HoaBinh Airlines" />
    <!------>

    <meta name="fb:page_id" content="sanvemaybaygiare.hoabinhtourist" />
    <meta name="fb:app_id" content="125686319174086" />
    <meta name="og:email" content="info@hoabinhtourist.com"/>
    <meta name="og:phone_number" content="0918640988"/>
    <!-- CSS plugin-->
    @include('inc/css_catalog')
    <style type="text/css">
        .wrapper22 {
            width: 1210px;
            max-width: 100%;
        }
        .wrapper{ max-width: 100%!important; }
    </style>
</head>
<body>
    <style type="text/css">
        .boxlag { float: right;width: 100%;height: auto;position: relative; }
        .boxlagabs { float: right;position: absolute;right: 0px;top: 2px;z-index: 99999999999; }
        
        /* Google Translate Custom UI */
        .lang-switch{
          display:flex;
          gap:10px;
          align-items:center;
        }

        .lang-btn{
          width:42px;
          height:42px;
          border-radius:999px;
          border:1px solid rgba(0,0,0,.12);
          background:#fff;
          padding:0;
          cursor:pointer;
          overflow:hidden;
          display:grid;
          place-items:center;
          transition:.2s;
        }

        .lang-btn:hover{
          transform: translateY(-1px);
          box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }

        .lang-btn img{
          width:100%;
          height:100%;
          object-fit:cover;
          display:block;
        }
      </style>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKC8CPC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
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


<div class="wrapper22">
    <div class="boxlag">
        <div class="boxlagabs">
           <!-- Google Translate (ẩn đi nhưng vẫn phải tồn tại) -->
           <div id="google_translate_element" style="display:none;"></div>

           <!-- Nút cờ của bạn -->
           <div class="lang-switch">
             <button type="button" class="lang-btn" data-lang="vi" aria-label="Tiếng Việt">
               <img src="https://flagcdn.com/w40/vn.png" alt="VI" />
             </button>

             <button type="button" class="lang-btn" data-lang="en" aria-label="English">
               <img src="https://flagcdn.com/w40/gb.png" alt="EN" />
             </button>
           </div>
         </div>
      </div>
    <!--@include('inc.banner2ben')-->
    <!-- Header -->
    <div class="header">
        <!--<div class="overlay-body"></div>
            <div class="subheader row m0 hidden-xs hidden-sm"></div>
                <div class="fl"><p>Vé máy bay giá rẻ trực tuyến HoaBinh Airlines</p></div>
            </div>-->

        <div class="mid-header row m0 p15mb" id="main-nav">
            <div class="fl f_none-mb relative-mb txc-xs header-mb">
                <!-- Site Logo -->
                <a href="https://hoabinhairlines.vn/">
                    <span style="height:0px;overflow: hidden;margin: 0px;padding: 0px;display: block;">Vé máy bay giá rẻ trực tuyến HoaBinh Airlines</span>
                    <img width="150px" height="100px" class="logo-header" src="https://cdn.hoabinhevents.com/logos/Logo%20-%20HBA1-8-cropped.png">
                </a>

                <a href="tel:0918640988" class="hotline-num visible-xs"><i class="fa fa-phone mr5" aria-hidden="true"></i>0918 640 988</a>
                <button class="btn btn-menu-mb visible-xs visible-sm" data-toggle="modal" data-target="#menuRight">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>



            <div class="hotline f_none-mb hidden-xs">
                <div class="hotline__infor fl_r">
                    <div class="">
                        <div class="fl_l div-td">
                            <div class="txt-tong-dai"><i class="fa fa-phone hidden-xs" aria-hidden="true"></i>TỔNG ĐÀI <b>24/7</b></div>
                            <a rel="nofollow" class="txt-hotline" href="tel:0939311911">
                                0939 311 911</a>
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




            <div id="alert_book_error" class="alert alert-danger"></div>
            <div id="alert_book_success" class="alert alert-success"></div>

            @yield('content')

        </div>
    </div>
    <!-- End Body -->


        @include('inc/footer3')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-196819974-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
        
            gtag('config', 'UA-196819974-1');
        </script>
        <script src="{{asset('public/frontend/js/jquery_compressed.min.js')}}"></script>
        
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <!--
            <script src="{{asset('public/frontend/js/toctoc.js')}}"></script>
            <script>
                $(document).ready(function() {
                    $.toctoc({
                        minimized: false
                    });
                });
            </script>
            -->
        
        <!-- Google Translate Custom Script -->
        <script>
          // Hàm init của Google
          function googleTranslateElementInit() {
            new google.translate.TranslateElement(
              {
                pageLanguage: 'vi',          // ngôn ngữ gốc trang
                includedLanguages: 'vi,en',  // bạn muốn hỗ trợ gì thì thêm vào đây: vi,en,ja,ko...
                autoDisplay: false
              },
              'google_translate_element'
            );
          }

          // Set cookie để Google Translate biết bạn muốn ngôn ngữ nào
          function setTranslateLang(lang) {
            // format cookie: /<from>/<to>
            const from = 'vi';
            const value = `/${from}/${lang}`;
            document.cookie = `googtrans=${value};path=/`;
            document.cookie = `googtrans=${value};path=/;domain=${location.hostname}`;

            // reload để widget áp dụng dịch
            location.reload();
          }

          // Gắn event cho button cờ
          document.addEventListener('click', function(e){
            const btn = e.target.closest('.lang-btn');
            if(!btn) return;
            const lang = btn.getAttribute('data-lang');
            setTranslateLang(lang);
          });
        </script>

        <!-- Script Google Translate -->
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
</body>
</html>

