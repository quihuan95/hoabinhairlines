@extends('layout')
@section('content')
<?
if(isset($_GET["Request"])){
    header('Location: https://hoabinhairlines.vn/');
    die();
}
?>

    <style type="text/css">
        .wrapper{
            max-width: 1170px;
        }
        @media (min-width: 1200px){
            .container{
                width: 1170px;
                padding-left: 0;
                padding-right: 0;
            }
        }
    </style>

    <div class="wrapper page-has-banner ve-may-bay">

        <!-- Body -->
        <div class="main-content ">
            <div class="content">
                <div class="container page-content-artice">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                        
                            <div id="EmbeddedSearchResult"></div>
                            
                            <script type="text/javascript">

                                var embeddedHost = "https://embedded.vnisc.com.vn";
                                var embeddedKey = "62Gdn*n98Kq!z+Bt";
                                var urlResult = "/flight";
                                var embeddedType = "horizontal";
                                (function () {
                                    const script = document.createElement("script");
                                    script.src = embeddedHost + "/Resources/Main/Embedded.js";
                                    script.async = true;
                                    document.body.appendChild(script);
                                })();
                                
                                </script>
                        </div>
                    </div>
                </div>

                <!-- Các chặng bay và hãng bay hàng đầu -->

                <!-- Đăng ký nhận tin khuyến mãi -->

            </div>
        </div>
        <!-- End Body -->
@endsection
