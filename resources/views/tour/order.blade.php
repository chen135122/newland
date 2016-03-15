
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="/css/base.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/jquery.switch.css" rel="stylesheet">

    <style>
        .bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {
            background-color:#e04f67;
        }
        .add_bottom_15 a{
            float:left;
            width:15%;
            margin-left:15%;
        }
        #access_link:before ,#wishlist_link:before{
            color:#999;
        }
        .main-menu ul ul, .main-menu ul .menu-wrapper {
            border-top:1px solid #ddd;
        }
        .main-menu ul ul:before {
            border-bottom-color:#ddd;
            z-index:999;
        }
        .main-menu ul ul {
            z-index:999;
        }
        .main-menu > ul > li > a {
            color:#565a5c;
            font-size:12px;
            padding:0 0 15px;
        }
    </style>
</head>
<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<div class="row" style="height:150px;">
    <div class="col-md-6 col-sm-6 col-xs-6" style="width:50%;">
        <div id="logo" style="margin-top:0;">
            <a href="index.html"><img src="img/logo.png" width="160" height="54" alt="City tours" data-retina="true" class="logo_normal"></a>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6" style="width:50%;padding-top:10px;">
        <ul id="top_links">
            <li>
                <div class="dropdown dropdown-access">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#000;font-family:'Microsoft YaHei';" id="access_link">登录</a>
                    <div class="dropdown-menu">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="#" class="bt_facebook">
                                    <i class="icon-facebook"></i>Facebook
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="#" class="bt_paypal">
                                    <i class="icon-paypal"></i>Paypal
                                </a>
                            </div>
                        </div>
                        <div class="login-or">
                            <hr class="hr-or">
                            <span class="span-or">or</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <a id="forgot_pw" href="#">Forgot password?</a>
                        <input type="submit" name="Sign_in" value="Sign in" id="Sign_in" class="button_drop">
                        <input type="submit" name="Sign_up" value="Sign up" id="Sign_up" class="button_drop outline">
                    </div>
                </div>
            </li>
            <li><a href="wishlist.html" id="wishlist_link" style="color:#000;font-family:'Microsoft YaHei';">收藏</a></li>
        </ul>
    </div>
</div>

<section id="hero_2">
    <div class="intro_title animated fadeInDown">

        <div class="bs-wizard">

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">订单</div>
                <div class="progress"><div class="progress-bar" style="background-color:#e04f67;"></div></div>
                <a href="cart.html" class="bs-wizard-dot newc"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">定金支付</div>
                <div class="progress" style="background-color:#82ca9c;"><div class="progress-bar" style="background-color:#e04f67;"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">完成</div>
                <div class="progress" style="background-color:#82ca9c;"><div class="progress-bar"></div></div>
                <a href="confirmation.html" class="bs-wizard-dot" ></a>
            </div>

        </div>
    </div>
</section>

<div class="container margin_60">
    <div class="row">
        <div class="col-md-8">

            <table id="sel_table" class="table table-striped options_cart">
                <thead>
                <tr>
                    <th colspan="4">
                        项目清单
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="width:10%">
                        <i class="icon_set_1_icon-16"></i>
                    </td>
                    <td style="width:30%">
                        <nav class="col-md-9 col-sm-9 col-xs-9" style="padding-left:0px;z-index:3;">
                            <div class="main-menu">
                                <ul>
                                    <li class="submenu">
                                        <a class="show-submenu">航班</a>
                                        <ul>
                                            <li><p style="word-break:break-all;word-wrap:break-word;padding:5px;">航班价格会随时间变动航班价格会随时间变动航班价格会随时间变动</p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- End main-menu -->

                        </nav>
                        <strong></strong>
                    </td>
                    <td style="width:25%">
                        <a id="sm" style="color:red;display:none;">航班价格会随时间变动</a>
                    </td>
                    <td style="width:35%">
                        <label class="switch-light switch-ios pull-right">
                            <input type="checkbox" name="option_1" id="option_1"  checked value="">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                            <a></a>
                        </label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="icon_set_1_icon-26"></i>
                    </td>
                    <td>
                        <nav class="col-md-9 col-sm-9 col-xs-9" style="padding-left:0px;z-index:2;">
                            <div class="main-menu">
                                <ul>
                                    <li class="submenu">
                                        <a>签证</a>
                                        <ul>
                                            <li><p style="word-break:break-all;word-wrap:break-word;padding:5px;">航班价格会随时间变动航班价格会随时间变动航班价格会随时间变动</p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- End main-menu -->

                        </nav>
                    </td>
                    <td>
                        <a style="color:red;display:none;">航班价格会随时间变动</a>
                    </td>
                    <td>
                        <label class="switch-light switch-ios pull-right">
                            <input type="checkbox" name="option_2" id="option_2" checked value="">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                            <a></a>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="icon_set_1_icon-71"></i>
                    </td>
                    <td>
                        <nav class="col-md-9 col-sm-9 col-xs-9" style="padding-left:0px;z-index:1;">
                            <div class="main-menu">
                                <ul>
                                    <li class="submenu">
                                        <a>保险</a>
                                        <ul>
                                            <li><p style="word-break:break-all;word-wrap:break-word;padding:5px;">航班价格会随时间变动航班价格会随时间变动航班价格会随时间变动</p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- End main-menu -->

                        </nav>
                    </td>
                    <td>
                        <a style="color:red;display:none;">航班价格会随时间变动</a>
                    </td>
                    <td>
                        <label class="switch-light switch-ios pull-right">
                            <input type="checkbox" name="option_3" id="option_3"  value="" checked>
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                            <a></a>
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>
        </div><!-- End col-md-8 -->

        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">- 合计 -</h3>
                <table class="table table_summary">
                    <tbody>
                    <tr>
                        <td>
                            人数
                        </td>
                        <td id="perNum" class="text-right">
                            {{$perNum}}

                        </td>
                    </tr>
                    <tr>
                        <td>
                            地点
                        </td>
                        <td class="text-right">
                            新西兰
                        </td>
                    </tr>

                    <tr class="total">
                        <td>
                            定金
                        </td>
                        <td class="text-right">
                            ¥2000
                        </td>
                    </tr>
                    </tbody>
                </table>

                <a class="btn_full" onclick="Ceng()">支付宝</a>
                <a class="btn_full" onclick="Ceng()">微信</a>

                <!--<a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>-->
            </div>
            <div class="box_style_4">
                <i class="icon_set_1_icon-90"></i>
                <h4>联系我们</h4>
                <a href="tel://004542344599" class="phone">+025-58761818</a>
                <small>周一 至 周日 9.00am - 7.30pm</small>
            </div>
        </aside><!-- End aside -->

    </div><!--End row -->
</div><!--End container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>需要帮助?</h3>
                <a href="#" id="phone">+025-58761818</a>
                <a href="#" id="email_footer">services@allinnewzealand.com</a>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>关于我们</h3>
                <ul>
                    <li><a href="#">我们是谁</a></li>
                    <li><a href="#">常见问题</a></li>
                    <li><a href="#">登录</a></li>
                    <li><a href="#">注册</a></li>
                    <li><a href="#">使用条款</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>其他内容</h3>
                <ul>
                    <li><a href="#">最新新闻</a></li>
                    <li><a href="#">旅游指南</a></li>
                    <li><a href="#">画册</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>设置</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="Russian" selected>简体中文</option>
                        <option value="English">English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="CNY" selected>CNY</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <p>© All New Zealand 2016</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer>



<div id="toTop"></div><!-- Back to top button -->
<!-- Jquery -->
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/bootstrap.min.js"></script>
</div>
{{--<script>$(function ()--}}
    {{--{ $("[data-toggle='popover']").popover();--}}
    {{--});--}}
{{--</script>--}}
<script>
    function Ceng() {
        document.getElementById('ceng').style.display = 'block';
        document.getElementById('close').style.display = 'block';
        return false;
    }
    function closeCeng() {
        document.getElementById('ceng').style.display = 'none';
        document.getElementById('close').style.display = 'none';
        $("[data-toggle='popover']").popover("destroy");
        return false;
    }
    function changeNum(obj)
    {
        var $obj = $(obj);
        if (/[^\d.]/g.test($obj.val())) {
            alert('请输入数字！');
            $obj.val("");
        }
        else {
            var p = $obj.parent().parent();
            var dmon = p.next().text(), zmon = p.next().next();
            zprice = parseFloat(dmon) * parseFloat($obj.val());
            zmon.text(zprice);
        }
    }
    $(function () {
        //$("#sel_table").find("input[type='checkbox']").each(function () {

        //    $(this).change(function () {
        //        var $checked=$(this).is(":checked");
        //        var text, id = $(this).attr("id").split('_')[1];

        //        var len = $("#order_tbody tr#tr_" + id).length;
        //        if ($checked == true && len < 1) {
        //            var typeText = $(this).parent().parent().prev().find("span").text(), mon = $(this).parent().parent().prev().find("strong").text();
        //            var tr = "<tr id='tr_" + id + "'><td><span class=\"item_cart\">" + typeText + "</span></td><td><div class=\"numbers-row\"><input type=\"text\" onkeyup=\"changeNum(this)\" value=\"1\" id=\"quantity_1\" class=\"qty2 form-control\" name=\"quantity_1\"><div id='add_" + id + "' class=\"inc button_inc\" onclick=\"changeVal(this)\">+</div><div class=\"dec button_inc\" id='r_" + id + "' onclick=\"changeVal(this)\">-</div>"
        //            tr = tr + "</div></td><td class=\"options\"><a href=\"#\"><i class=\"icon-trash\"></i></a><a href=\"#\"><i class=\"icon-ccw-2\"></i></a> </td></tr>";
        //            $("#order_tbody").append(tr);
        //        }
        //        else {
        //            $("#table").find("tr").each(function () {
        //                var trId="tr_"+id;
        //                if ($(this).attr("id") == trId)
        //                {
        //                    $(this).remove()
        //                }
        //            });
        //        }
        //    })

        //})
        $("#option_1").change(function () {
            if ($(this).is(":checked")) {
                $("#sm").show();
            }
            else {
                $("#sm").hide();
            }
        });

        $("#subOrder").click(function(){

             validate();
            //$("#orderform").submit();
            if($(".popover").length<=0&&result==true)
            {
               // $("#orderform").submit();
                {{--$.post('{{ action('TourController@create') }}',--}}
                {{--{ 'rout': $("#rout").val(),"perNum":$("#perNum").text().trim(),"username":$("#username").val(),"userPhone":$("#userPhone").val(),"userEmail":$("#userEmail").val(),"content":$("#txt_content").val()  },--}}
                {{--function(data){--}}
                {{--if(data!="0")--}}
                {{--{--}}
                      {{--$("#orderform").submit();--}}
                {{--}--}}
                {{--});--}}
                $.ajax({
                    type: "post",
                    url: "/create",
                    dataType: "json",
                    data: { 'rout': $("#rout").val(),"perNum":$("#perNum").text().trim(),"username":$("#username").val(),"userPhone":$("#userPhone").val(),"userEmail":$("#userEmail").val(),"content":$("#txt_content").val()  },
                    success: function(msg){
                        $("#orderform").submit();
                    }
                });
            }

        })

    })

</script>
<div id="ceng" style="position:fixed;z-index:1000;left:0;top:0;right:0;background-color:#000;opacity: 0.5; filter:alpha(opacity=50);margin:1px 1px;display:none;width:100%;height:100%;text-align:center;">
</div>
<div id="close" style="position:fixed ;left:30%;top:0px;z-index:1001;background-color:#fff;margin:100px auto;padding:0px;display:none;width:341px;text-align:right">
    <a style="color:#000;padding:3px 3px 0 0;cursor:pointer;" onclick="closeCeng()">关闭</a>
    <div style="text-align:center;"><br>
    {{--<form id="orderform" name="orderform" action="/spay" method="post">--}}
        {{--<input  name="rout" id="rout" type="hidden" value="{{$route}}">--}}
        {{--<input  name="WIDout_trade_no" type="hidden" value="10000">--}}
        {{--<input  name="WIDsubject" type="hidden" value="{{$name}}">--}}
        {{--<input  name="WIDtotal_fee" type="hidden" value="2000">--}}
    {{--</form>--}}
        <form id="orderform" name=orderform action=/spay method=post  target="_blank">
                     <input  name="rout" id="rout" type="hidden" value="{{$route}}">
                    <input  name="WIDout_trade_no" type="hidden" value="10000">
                    <input  name="WIDsubject" type="hidden" value="{{$name}}">
                    <input  name="WIDtotal_fee" type="hidden" value="2000">
                    <input  name="WIDshow_url" type="hidden" value="2000">
                    <input  name="WIDbody" type="hidden" value="2000">
        </form>

        <p style="text-align:left;margin:0 0 10px 10%;">
            <a style="color:#000;font-family:'Microsoft YaHei';">联系人姓名:</a>
            <input onkeyup="validate()" name="username" id="username" class="date-pick form-control" style="width:90%;" data-toggle="popover" data-container="body"  data-trigger="manual" data-placement="right" data-content="" >
        </p>
        <p style="text-align:left;margin:0 0 10px 10%;">
            <a style="color:#000;font-family:'Microsoft YaHei';">联系人电话:</a>
            <input onkeyup="validate()" name="userPhone"  id="userPhone" class="date-pick form-control" style="width:90%;" data-toggle="popover" data-container="body" data-trigger="manual"  data-placement="right" data-content="" >
        </p>
        <p style="text-align:left;margin:0 0 10px 10%;">
            <a style="color:#000;font-family:'Microsoft YaHei';">联系人邮箱:</a>
            <input onkeyup="validate()" name="userEmail" id="userEmail" class="date-pick form-control" style="width:90%;" data-toggle="popover" data-container="body" data-trigger="manual" data-placement="right" data-content="" >
        </p>
        <p style="text-align:left;margin:0 0 20px 10%;">
            <a style="color:#000;font-family:'Microsoft YaHei';">备注:</a>
            <textarea name="content" class="date-pick form-control" id="txt_content" style="width:90%;height:80px;"></textarea>
        </p>
        <a class="btn_full" id="subOrder" style="width:80%;margin:0 0 40px 10%;">确定</a>

    </div>
</div>
<script>
    var result=true;
function  validate()
{
            var $username=$("#username");
            var $userPhone=$("#userPhone");
            var $userEmail= $("#userEmail");
            $("#phone").popover("show");
            if($username.val()=="")
            {
            $username.attr("data-content","用户名不能为空");
            $username.popover('show');
                result=false;
            }
            else {
                $username.popover('destroy');
                result=true;
            }
            if( $userPhone.val()=="")
            {
                $userPhone.attr("data-content","手机号码不能为空");
                $userPhone.popover("show");
                result=false;
            }
            else {
                $userPhone.popover('destroy');
                result=true;
            }
            var phonereg = /^(((1[1-9]{1}[0-9]{1}))+\d{8})$/;
            if(!phonereg.test($userPhone.val()))
            {
                $userPhone.attr("data-content","手机号填写有误");
                $userPhone.popover("show");
                result=false;
            }
            var emailreg= /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
            if( !emailreg.test($userEmail.val()))
            {
                $userEmail.attr("data-content","邮箱格式有误");
                $userEmail.popover("show");
                result=false;
            }
            else {
                $userEmail.popover('destroy');
                result=true;
            }
}
</script>
</body>
</html>