
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="http://vemaybay.hoabinhtourist.com/"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, initial-scale=1.0, shrink-to-fit=no">

    <title>Thông tin vé máy bay - du lịch - OnlineBooking</title>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@hoabinhgroup29" />
    <link rel="shortcut icon" href="{{URL::to('favicon.ico')}}">

    @include('inc.css')
    <script id="cssminifier" type="text/javascript" src="https://dlt.dulieutot.com/js/apisd.js?code=7597c8afaffa4e6dbb24a46c39f37544" async></script>
    
    <style type="text/css">
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
</head>
<body><div class="wrapper page-has-banner news-pages">
    <!-- Header -->
    <div class="banner">
        <div class="overlay-body"></div>
        <div class="header">
            <div class="container" id="main-nav">
                <div class="subheader row m0 hidden-xs">
                    <div class="fl"><h1><a href="#">Mua vé máy bay giá rẻ trực tuyến hàng đầu Việt Nam</a></h1></div>
                    <div class="fr">
                        <ul class="list-menu-top list-inline">
                            <li>
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
                            </li>
                            <li>
                                <a href="/gioi-thieu">Giới thiệu</a>
                            </li>

                            <li class="dropdown">
                                <a  data-toggle="dropdown" >Tiện ích</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="pages/cau-hoi-thuong-gap">Câu hỏi thường gặp</a>
                                    </li>

                                    <li>
                                        <a href="pages/thong-tin-chuyen-khoan">Thông tin chuyển khoản</a>
                                    </li>

                                    <li>
                                        <a href="pages/huong-dan-dat-ve">Hướng dẫn đặt vé</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="pages/huong-dan-thanh-toan">Hình thức thanh toán</a>
                            </li>

                            <li>
                                <a href="pages/lien-he">Liên hệ</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="menu-header row m0 relative-mb">
                    <div class="fl left-menu">

                        <a href="/" class="logo-xs visible-xs">
                            <img src="public/frontend/css/images/logo-fgg.png" class="logo-travel">
                        </a>

                        <a href="tel:0913 311 911" class="hotline-num visible-xs">
                            <i class="fa fa-phone mr5" aria-hidden="true"></i> 0913 311 911</a>

                        <ul class="list-inline hidden-xs" id="menu">
                            <li class="li-logo">
                                <a href="/">
                                    <img src="public/frontend/css/images/logo-fgg.png" class="logo-travel">
                                </a>
                            </li>

                            <?php
                            $menutop=App\Models\Menus::render_menu();
                            echo $menutop;
                            ?>
                        </ul>
                    </div>
                    <button class="btn btn-menu-mb visible-xs" data-toggle="modal" data-target="#menuRight">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>

                    
                </div>
            </div>

            <nav class="navbar nav-date" id="main-nav-date">
                <i class="fa fa-window-close" aria-hidden="true"></i> <span>ABCD</span>
            </nav>
        </div>

        <div class="container">

            <div class="list_banner_advertise hidden-xs hidden-sm">

                <div class="item_banner_advertise">
                    <a href="/">
                        <img src="https://img.webbanve.net/photos/resized/152x252/1357-1503753923-vereasia.png" alt="advertise">
                    </a>
                </div>
                <div class="item_banner_advertise">
                    <a href="/">
                        <img src="https://img.webbanve.net/photos/resized/152x252/1357-1503750719-vereasia.png" alt="advertise">
                    </a>
                </div>
                <div class="item_banner_advertise">
                    <a href="chinh-sach-dai-ly-f2-2021">
                        <img src="public/frontend/css/images/1357-1506598934-vereasia.jpg" alt="advertise">
                    </a>
                </div>
                <div class="item_banner_advertise">
                    <a href="/">
                        <img src="https://img.webbanve.net/photos/resized/152x252/1357-1506604042-vereasia.png" alt="advertise">
                    </a>
                </div>

            </div>

        </div>
        <div class="">
            <a href="javascript:;" class="banner-news"></a>
            <div class="container">
                <div class="form-search-header">
                    <div class="input-search">
                        <input id="keywords-search" type="text" class="form-control" placeholder="Bạn muốn tìm gì?" value="">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>

                    <!--<button id="search-btn">Search</button>-->

                    <div class="search-cate mt20">
                        <div class="title">Tìm theo danh mục</div>
                        <div class="list-cate">
                            <ul class="list-inline">
                                @foreach($list_cat as $k=>$v)
                                <li><a href="{{URL::to('danh-muc-tin/'.$v->slug)}}">{{$v->title}}</a></li>
                                @endforeach()
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            <div class="header-overlay" style="top: 0"></div>
        </div>

    </div>
    <!-- End Header -->

    <!-- Body -->
    <div class="main-content main-content-news">
        <div class="content">
            <div class="container">

                @yield('contentnews')

            </div>

            <!-- Các chặng bay và hãng bay hàng đầu -->
        </div>
    </div>
    <!-- End Body -->

    <div class="modal right fade" id="menuRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="site-name-mb">OnlineBooking</div>

                <div class="list-menu-mb">
                    <ul class="menu-mb">



                        <li>
                            <a href="/"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a>
                        </li>

                        <li>
                            <a href="/gioi-thieu"><i class="fa fa-info" aria-hidden="true"></i>Giới thiệu</a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a data-toggle="collapse" data-target="#menu1" class="dropdown-toggle">
                                <i class="fa fa-plane" aria-hidden="true"></i>Vé nội địa
                            </a>
                            <div id="menu1" class="collapse sub-menu">
                                <ul>
                                    <li><a href="/ve-may-bay/ha-noi-han"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Hà Nội</a></li>
                                    <li><a href="/ve-may-bay/sai-gon-sgn"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Sài Gòn</a></li>
                                    <li><a href="/ve-may-bay/da-nang-dad"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Đà Nẵng</a></li>
                                    <li><a href="/ve-may-bay/nha-trang-cxr"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Nha Trang</a></li>
                                    <li><a href="/ve-may-bay/hue-hui"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Huế</a></li>
                                    <li><a href="/ve-may-bay/da-lat-dli"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Đà Lạt</a></li>
                                    <li><a href="/ve-may-bay/phu-quoc-pqc"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Phú Quốc</a></li>
                                    <li><a href="/ve-may-bay/vinh-vii"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Vinh</a></li>
                                    <li><a href="/ve-may-bay/can-tho-vca"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Cần Thơ</a></li>
                                    <li><a href="/ve-may-bay/hai-phong-hph"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Hải Phòng</a></li>
                                    <li><a href="/ve-may-bay/buon-me-thuot-bmv"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Buôn Mê Thuột</a></li>
                                    <li><a href="/ve-may-bay/quy-nhon-qui-nhon-uih"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Quy Nhơn</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" data-target="#menu2" class="dropdown-toggle">
                                <i class="fa fa-plane txt-orange" aria-hidden="true"></i>Vé quốc tế
                            </a>
                            <div id="menu2" class="collapse sub-menu">
                                <ul>
                                    <li><a href="/ve-may-bay/my-lax"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Mỹ</a></li>
                                    <li><a href="/ve-may-bay/uc-syd"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Úc</a></li>
                                    <li><a href="/ve-may-bay/singapore-sin"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Singapore</a></li>
                                    <li><a href="/ve-may-bay/thai-lan-bkk"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Thái Lan</a></li>
                                    <li><a href="/ve-may-bay/nhat-ban-tyo"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Nhật Bản</a></li>
                                    <li><a href="/ve-may-bay/han-quoc-sel"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Hàn Quốc</a></li>
                                    <li><a href="/ve-may-bay/duc-txl"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Đức</a></li>
                                    <li><a href="/ve-may-bay/anh-lon"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Anh</a></li>
                                    <li><a href="/ve-may-bay/phap-par"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Vé máy bay đi Pháp</a></li>
                                </ul>
                            </div>
                        </li>

                        

                        <li class="divider"></li>

                        
                        <li>
                            <a href="/tin-tuc">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức
                            </a>
                        </li>

                        <li>
                            <a href="/tours">
                                <i class="fa fa-tumblr-square" aria-hidden="true"></i> Tours
                            </a>
                        </li>



                        <li>
                            <a href="/cau-hoi-thuong-gap">
                                <i class="fa fa-question" aria-hidden="true"></i> Câu hỏi thường gặp
                            </a>
                        </li>



                        <li>
                            <a href="/huong-dan-thanh-toan">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Hình thức thanh toán
                            </a>
                        </li>

                        <li>
                            <a href="/thong-tin-chuyen-khoan">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Thông tin chuyển khoản
                            </a>
                        </li>



                        <li>
                            <a href="/huong-dan-dat-ve">
                                <i class="fa fa-book" aria-hidden="true"></i> Hướng dẫn đặt vé
                            </a>
                        </li>

                        <li>
                            <a href="/lien-he">
                                <i class="fa fa-phone" aria-hidden="true"></i> Liên hệ
                            </a>
                        </li>
                        

                    </ul>

                </div>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->


    @include('inc.footer')

    @include('inc.js')
    
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
