@extends('layout')
@section('title')
    <title>Login</title>
    <meta name="keywords" content="Login" >
    <meta name="description" content="Login" >
    <link rel="canonical" href="login" />
@endsection
@section('content')
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
                    <li><a href="news"> news</a></li>
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
                        <div class="logo"><a href="/"><img src="{{asset('')}}public/frontend/css/images/logo.png" alt="Logo Event Crew" /></a></div>
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
                                                <p><a href="news"> news</a></p>
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

    <div style="width:100%;clear:both;">
        <div class="waplogin">
            <?php
            $username=Session::get('username');
            if($username){
echo ' <div class="our_services wow bounceInLeft">
                        <p>
                            HELLO: '.$username.'</p>
                        <p>&nbsp;</p>
                    </div>';
            }else{  ?>


                <div>
                    <div class="our_services wow bounceInLeft">
                        <p>
                            LOGIN</p>
                        <img alt="arrow service" src="{{asset('public/frontend/css/images/arrow_down_service.png')}}"/>
                        <p>&nbsp;</p>
                    </div>

                    <div>
                        <div class="container wow bounceInRight">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <form action="{{URL::to('/login-process')}}" method="post">
                                    {{ csrf_field() }}
                                    <?php
                                    $message=Session::get('message');
                                    if($message){
                                        echo '<span style="color: red;">'.$message.'</span>';
                                        $message=Session::put('message',null);
                                    }
                                    ?>
                                    <table style="width: 100%;margin: 0px;padding: 0px;">
                                        <tr>
                                            <td colspan="2"><input type="email" class="form-control" style="margin-bottom:10px;" required="" id="txtEmail" name="txtEmail" placeholder="Email"></td>
                                            <td rowspan="3" style="text-align: center;vertical-align: top;width: 10%;"><input type="submit" style="margin: 0 5px;padding: 26px 20px;width: 100%;font-size: 130%;background-color: #fff;color: #000;border: solid 1px #fff;" class="btn btn-primary" value="Login" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="password" class="form-control" style="margin-bottom:10px;" required="" id="txtpass" name="txtpass" placeholder="Password"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a style="color: #6b6b6b;" href="javascript:void(0)">Forgot password?</a>
                                            </td>
                                            <td style="text-align: right;">
                                                <a style="color: #6b6b6b;" href="{{URL::to('registration')}}">Not a member yet? Register</a>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>&nbsp;</p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="col-md-6 col-sm-6 col-xs-12 wow bounceInLeft">

                                <div class="log_z0d">
                                    <div class="log_z1d">
                                        COVID-19 Flair Staffing Updates
                                    </div>
                                    <div class="log_z2d">
                                        During these unprecedented times,<br/>Flair staffing agency is still committed and here working for our team.
                                    </div>
                                    <div class="log_z3d">
                                        <a data-toggle="modal" data-target="#defaultModal" href="javascript:void(0);">Message to our team</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 wow bounceInRight">

                                <div class="log_z0d logz5d">
                                    <div class="log_z1d">
                                        COVID-19 Flair Staffing Updates
                                    </div>
                                    <div class="log_z2d">
                                        During these unprecedented times,<br/>Flair staffing agency is still committed and here working for our team.
                                    </div>
                                    <div class="log_z3d">
                                        <a data-toggle="modal" data-target="#defaultModalQuote_request" href="javascript:void(0);">Quocte Request</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>

    </div>


    <!-- Default Size -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" style="z-index: 9999999;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                     <h3 class="modal-title" id="defaultModalLabel">INFORMATION DETAIL</h3>
                 </div>-->
                <div class="modal-body" style="background-color: #000;">
                    <div class="message_wap">
                        <div class="mess_header">
                            COVID-19 UPDATE
                        </div>
                        <div class="messbody">
                            <p>Flair team wish you all nothing but the best, stay at home, embrace some YOU time and look after your physical and mental health during these tough times. Understandably we are receiving questions concerning future work contracts and the types of work we can offer. We’re keeping up to date with news reports and working closely with our clients to post updates as they happen on our website, via social media and direct emails.</p>
                            <p>Your health and safety are paramount as Summer approaches, and we prepare for the Autumn season.</p>
                            <p>Flair team moved quickly to look at different types of work opportunities for those who still want to work in the ‘essential’ categories, mainly for the coming months. Interviews are open and we are offering telephone and Skype interviews. It’s great to hear from people wanting to join our team for tomorrows possibilities.</p>
                            <a class="regis" href="{{URL::to('registration')}}">Register</a>
                            <p style="text-align: center;">Let’s all help the front-line workers; they need your support more than ever.</p>

                            <p style="text-align: center;">The Flair Team</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #000;border-top: 1px solid #e8bf4e;">
                    <button type="button" style="background-color: #e8bf4e;color: #000;font-family: UTMAptima;" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="defaultModalQuote_request" tabindex="-1" role="dialog" style="z-index: 9999999;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" style="background-color: #000;">
                    <div class="message_wap">
                        <div class="mess_header">
                            <p>QUOTE REQUEST</p>
                        </div>
                        <div class="messbody">
                            <p style="text-align: center;">Tel: +84 98.98.98.198</p>
                            <p style="text-align: center;">Email: Jackiehan.vn@gmail.com</p>

                            <div class="wfc">
                                <?php
                                $message=Session::get('message');
                                if($message){
                                    echo '<p style="text-align: center;"><span style="color: red;">'.$message.'</span></p>';
                                    $message=Session::put('message',null);
                                }else{
                                ?>
                                <form method="post" action="{{URL::to('/save-quote-request')}}">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtFirstname" name="txtFirstname" placeholder="First Name">
                                    <input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtLastname" name="txtLastname" placeholder="Last Name">
                                    <input type="email" class="form-control" style="margin-bottom:10px;" required="" id="txtEmail" name="txtEmail" placeholder="Email">
                                    <input type="text" class="form-control" style="margin-bottom:10px;" id="txtCompanyname" name="txtCompanyname" placeholder="Company Name">
                                    <input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtTelephone" name="txtTelephone" placeholder="Telephone">
                                    <input type="text" class="form-control" style="margin-bottom:10px;" id="txtCompanyaddress" name="txtCompanyaddress" placeholder="Company Address">

                                    <div class="cl">Hire Information</div>
                                    <input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtContractname" name="txtContractname" placeholder="Contract Name (optional)">
                                    <input type="text" class="form-control" style="margin-bottom:10px;" id="txtLocationaddress" name="txtLocationaddress" placeholder="Location - Address">
                                    <input type="text" class="form-control" style="margin-bottom:10px;" id="txtPostcode" name="txtPostcode" placeholder="Postcode - Address">
                                    <div class="cl">Start Date</div>
                                    <select id="yearstart" name="yearstart">

                                        <?php
                                        $now = getdate();$i=$now["year"];$j=$now["year"]+50;$k='';
                                        for ($i;$i<=$j;$i++){
                                            $k.= '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                        echo $k;
                                        ?>

                                    </select>
                                    <select id="monthstart" name="monthstart">
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                    <select id="daystart" name="daystart">
                                        <?php
                                        $m='';
                                        for($i=1;$i<=31;$i++){
                                            if($i<10){ $m.='<option value="0'.$i.'">0'.$i.'</option>'; }
                                            else{ $m.='<option value="'.$i.'">'.$i.'</option>'; }
                                        }
                                        echo $m;
                                        ?>
                                    </select>

                                    <div class="cl">Finish Date</div>
                                    <select id="yearfinish" name="yearfinish">
                                        <?php
                                        $now = getdate();$i=$now["year"];$j=$now["year"]+50;$k='';
                                        for ($i;$i<=$j;$i++){
                                            $k.= '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                        echo $k;
                                        ?>
                                    </select>
                                    <select id="monthfinish" name="monthfinish">
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                    <select id="dayfinish" name="dayfinish">
                                        <?php
                                        $m='';
                                        for($i=1;$i<=31;$i++){
                                            if($i<10){ $m.='<option value="0'.$i.'">0'.$i.'</option>'; }
                                            else{ $m.='<option value="'.$i.'">'.$i.'</option>'; }
                                        }
                                        echo $m;
                                        ?>
                                    </select>

                                    <div class="cl">List any job title you want to covered</div>
                                    <!--<input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtJobPositions" name="txtJobPositions" placeholder="Job Positions">-->
                                    <select id="type_of_crew_service" name="type_of_crew_service" class="form-control" style="margin-bottom:10px;margin-top: 10px;">
                                        <option value="">Type of Crew Service</option>
                                        <option value="1">Show & event staff</option>
                                        <option value="2">Conference staff</option>
                                        <option value="3">Sport crew</option>
                                        <option value="4">Tradeshow & exhibition staff</option>
                                        <option value="5">Hospitality & casual staff</option>
                                        <option value="6">Entertainment staff</option>
                                        <option value="7">Other</option>
                                    </select>
                                    <div class="cl">Duration of jobs on offer?</div>
                                    <div class="selectradio">
                                        <ul>
                                            <li><label><input type="radio" checked id="rdoTemplate" name="duration" value="0"> Template</label></li>
                                            <li><label><input type="radio" id="rdoRegular" name="duration" value="1"> Regular</label></li>
                                            <li><label><input type="radio" id="rdoFulltime" name="duration" value="2"> Full time</label></li>
                                        </ul>
                                    </div>
                                    <div class="cl">Other interesting facts</div>
                                    <textarea name="other_interesting_facts" rows="5" cols="5" style="width: 100%;height: 150px;resize: none;"></textarea>
                                    <div style="text-align: right;">
                                        <button style="margin-top: 10px;padding: 1px 30px 5px 30px;font-weight: bold;font-size: 18px;background: #e8bf4e;color: #000;border: none;font-family: UTMAptima;" data-dismiss="modal" type="button" class="btn btn-primary">
                                            Close</button>
                                        <button style="margin-top: 10px;padding: 1px 30px 5px 30px;font-weight: bold;font-size: 18px;background: #e8bf4e;color: #000;border: none;font-family: UTMAptima;" type="submit" class="btn btn-primary">
                                            Submit</button>
                                    </div>
                                </form>
                                <?php }?>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer" style="background-color: #000;border-top: 1px solid #e8bf4e;">
                     <button type="button" style="background-color: #e8bf4e;color: #000;font-family: UTMAptima;" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                 </div>-->
            </div>
        </div>
    </div>
@endsection
