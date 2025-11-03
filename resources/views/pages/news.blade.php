@extends('layout')
@section('title')
    <title>News</title>
    <meta name="keywords" content="News" >
    <meta name="description" content="Event Crew is a professional company in the field of event organizationand experiential marketing event staffing. We help bring brands to life by providing friendly and engaging individuals who create meaningful and memorable brand experiences for consumers." >
    <link rel="canonical" href="{{URL::to('news')}}" />
@endsection
@section('content')
    <link href="{{asset('public/frontend/css/jquerysctipttop.css')}}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .mixedSlider {
            position: relative;
        }
        .mixedSlider .MS-content {
            white-space: nowrap;
            overflow: hidden;
            margin: 0 2%;
        }
        .mixedSlider .MS-content .item {
            display: inline-block;
            width: 33.3333%;
            position: relative;
            vertical-align: top;
            overflow: hidden;
            height: 100%;
            white-space: normal;
            padding: 0 10px;
        }
        @media (max-width: 991px) {
            .mixedSlider .MS-content .item {
                width: 50%;
            }
        }
        @media (max-width: 767px) {
            .mixedSlider .MS-content .item {
                width: 100%;padding: 0 20px;
            }
        }
        .mixedSlider .MS-content .item .imgTitle {
            position: relative;
        }
        .mixedSlider .MS-content .item .imgTitle .blogTitle {
            margin: 0;
            text-align: left;
            letter-spacing: 2px;
            color: #252525;
            font-style: italic;
            position: absolute;
            background-color: rgba(255, 255, 255, 0.5);
            width: 100%;
            bottom: 0;
            font-weight: bold;
            padding: 0 0 2px 10px;
        }
        .mixedSlider .MS-content .item .imgTitle img {
            height: auto;
            width: 100%;
        }
        .mixedSlider .MS-content .item p {
            font-size: 16px;
            margin: 2px 10px 0 5px;
            text-indent: 15px;
        }
        .mixedSlider .MS-content .item a {
            float: right;
            margin: 0 20px 0 0;
            font-size: 16px;
            font-style: italic;
            color: rgba(173, 0, 0, 0.82);
            font-weight: bold;
            letter-spacing: 1px;
            transition: linear 0.1s;
        }
        .mixedSlider .MS-content .item a:hover {
            text-shadow: 0 0 1px grey;
        }
        .mixedSlider .MS-controls button {
            position: absolute;
            border: none;
            background-color: transparent;
            outline: 0;
            font-size: 50px;
            top: 5px;
            color: rgba(0, 0, 0, 0.4);
            transition: 0.15s linear;
        }
        .mixedSlider .MS-controls button:hover {
            color: rgba(0, 0, 0, 0.8);
        }
        @media (max-width: 992px) {
            .mixedSlider .MS-controls button {
                font-size: 30px;
            }
        }
        @media (max-width: 767px) {
            .mixedSlider .MS-controls button {
                font-size: 20px;
            }
        }
        .mixedSlider .MS-controls .MS-left {
            left: 0px;
        }
        @media (max-width: 767px) {
            .mixedSlider .MS-controls .MS-left {
                left: 0px;top:50px;
            }
        }
        .mixedSlider .MS-controls .MS-right {
            right: 0px;
        }
        @media (max-width: 767px) {
            .mixedSlider .MS-controls .MS-right {
                right: 0px;top:50px;
            }
        }
        #basicSlider { position: relative; }

        #basicSlider .MS-content {
            white-space: nowrap;
            overflow: hidden;
            margin: 0 2%;
            height: 50px;
        }

        #basicSlider .MS-content .item {
            display: inline-block;
            width: 20%;
            position: relative;
            vertical-align: top;
            overflow: hidden;
            height: 100%;
            white-space: normal;
            line-height: 50px;
            vertical-align: middle;
        }
        @media (max-width: 991px) {

            #basicSlider .MS-content .item { width: 25%; }
        }
        @media (max-width: 767px) {

            #basicSlider .MS-content .item { width: 35%; }
        }
        @media (max-width: 500px) {

            #basicSlider .MS-content .item { width: 50%; }
        }

        #basicSlider .MS-content .item a {
            line-height: 50px;
            vertical-align: middle;
        }

        #basicSlider .MS-controls button { position: absolute; }

        #basicSlider .MS-controls .MS-left {
            top: 35px;
            left: 10px;
        }

        #basicSlider .MS-controls .MS-right {
            top: 35px;
            right: 10px;
        }
    </style>
    <script type="text/javascript">
        function fcontent(v) {
            $.ajax({
                type: "POST", // phương thức gởi đi
                url: "./ajax-content", // nơi mà dữ liệu sẽ chuyển đến khi submit
                data: "id=" + v, // giá trị post
                success: function(answer){ // if everything goes well
                    $('div#wap_aj_content'+v).fadeIn(); // hiển thị thẻ div success
                    $('div#wap_aj_content'+v).html(answer); // đặt kết quả trả về từ test.php vào thẻ div success
                }
            });
            return false;  // Form sẽ không chuyển đến trang test.php
        }
    </script>
    <!--<div id="wap_aj_content'.$item->id.'">-->
    <div class="wmn" onclick="fnExt(0);"></div>
    <div class="wmnleft">
        <div class="mnleft" id="mnleft">
            <div class="wtitle">
                <span class="ptitle"><img src="{{asset('public/frontend/css/images/logo.png')}}" alt="logo on menu"/></span>
                <div class="close" onclick="fnExt(0);">
                    <div class="bar1"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <hr style="margin:25px 0px 0px 0px;padding:0px;" />

            <div class="bodymenuleft">
                <ul>
                    <li><a href="about-us"> About</a></li>
                    <li><a href="crew-service"> crew service</a></li>
                    <li><a href="event-service"> event service</a></li>
                    <li><a href="portfolio"> portfolio</a></li>
                    <li><a href="be-inspired"> be inspired</a></li>
                    <li><a href="clients-staff"> clients & staff</a></li>
                    <li><a href="quote-request"> request a proposal</a></li>
                    <li><a href="staff-work-an-event"> staff | work an event</a></li>
                    <li><a class="active" href="news"> news</a></li>
                    <li><a href="contact"> contact us</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="top"></div>
    <div id="myboxtop">
        <div class="bgheadtop">


            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="logo"><a href="/"><img src="{{asset('public/frontend/css/images/logo.png')}}" alt="Logo Event Crew" /></a></div>
                        <div class="bar-button" onclick="fnExt(1);"><img src="{{asset('public/frontend/css/images/button-bar.png')}}" alt="bar button"/></div>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="menutop">
                            <ul>
                                <li><a href="about-us">ABOUT</a></li>
                                <li class="s"></li>
                                <li><a href="crew-service">CREW SERVICE</a></li>
                                <li class="s"></li>
                                <li><a href="event-service">EVENT SERVICE</a></li>
                                <li class="s"></li>
                                <li><a href="portfolio">PORTFOLIO</a></li>
                                <li class="s"></li>
                                <li><a href="be-inspired">BE INSPIRED</a></li>
                                <li class="s"></li>
                                <li><a href="clients-staff">CLIENTS & STAFF</a></li>
                                <li class="s"></li>
                                <li>
                                    <div class="containermn">
                                        <div class="bar1"></div>
                                        <div class="bar2"></div>
                                        <div class="bar3"></div>
                                        <div class="submenu">
                                            <div class="borderheadsubmenu">
                                                <!--<div style="position:relative;float:left;"><div style="position:absolute;float:left;"><img src="css/images/arrow_top.png" /></div></div>            -->
                                                <p class="margin-top15"><a href="quote-request">request a proposal</a></p>
                                                <p><a href="staff-work-an-event">staff | work an event</a></p>
                                                <p><a class="active" href="news"> news</a></p>
                                                <p><a href="contact">contact us</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $(".containermn").hover(function () {
                                                myFunction(this);
                                            });
                                        });
                                        function myFunction(x) {
                                            x.classList.toggle("change");
                                        }
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ourcrewservices" style="padding-top:50px;">
        <div class=""><!--wow bounceInDown-->
            <div class="our_services">
                <p>
                    NEWS</p>
                <img alt="arrow service" src="{{asset('public/frontend/css/images/arrow_down_service.png')}}"/>
            </div>

        </div>
        <div class="bg-service bg-sernone">
            <div class="container mgnews"><!-- wow bounceInUp-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    @foreach($all_news as $k => $val)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="boxnews">
                                <div class="boxnewsimg">
                                    <a href="{{URL::to('news/'.$val->slug)}}"><img src="{{URL::to('public/uploads/news/'.$val->picture)}}"></a>
                                </div>
                                <div class="boxnewstitle">
                                    <a href="{{URL::to('news/'.$val->slug)}}">{{$val->title}}</a>
                                </div>
                                <div class="boxnewsdatetime">
                                    <span style="margin-right: 20px;">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <?php
                                        $dateObject = DateTime::createFromFormat('Y-m-d H:i:s', $val->created_at);
                                        echo $dateObject->format('d/m/Y');
                                        ?>
                                    </span>
                                    <span><i class="fa fa-eye" aria-hidden="true"></i>Views: {{$val->viewnum}}</span>
                                </div>
                                <div class="boxnewscatdesc">
                                    {{$val->news_desc}}
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <nav aria-label="Page navigation">
                        {!! $all_news->links() !!}
                    </nav>
                </div>
            </div>
        </div>



    </div>

@endsection
