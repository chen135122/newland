
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
    <title>订单页</title>

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
                <a href="#" class="bs-wizard-dot"></a>
            </div>
            <!--style="background-color:#82ca9c;"-->
            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">定金支付</div>
                <div class="progress" style="background-color:#e04f67;"><div class="progress-bar" style="background-color:#e04f67;"></div></div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">完成</div>
                <div class="progress" style="background-color:#e04f67;"><div class="progress-bar" style="background-color:#e04f67;"></div></div>
                <a href="" class="bs-wizard-dot"></a>
            </div>

        </div>
    </div>
</section>

<div class="container margin_60">
    <div class="row">
        <div class="col-md-8 add_bottom_15">

            <div class="form_title">
                <h3><strong><i class="icon-ok"></i></strong>感谢您! </h3>
                <p>
                    {{$travel->hugetitle}}
                </p>
            </div>
            <div class="step">
                <p>
                    {{$travel->title}}
                </p>
            </div><!--End step -->

            <div class="form_title">
                <h3><strong><i class="icon-tag-1"></i></strong>订单信息</h3>
                <p>
                    {{$travel->hugetitle}}
                </p>
            </div>
            <div class="step">
                <table class="table confirm">
                    <thead>
                    <tr>
                        <th colspan="2">
                            列表
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <strong>订单号</strong>
                        </td>
                        <td>
                            {{$order->sn}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>出发地</strong>
                        </td>
                        <td>
                            {{$travel->start_place}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>出发时间</strong>
                        </td>
                        <td>
                            2015年12月1号
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>目的地</strong>
                        </td>
                        <td>
                            新西兰
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>抵达时间</strong>
                        </td>
                        <td>
                            2015年12月1号
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>支付状态</strong>
                        </td>
                        <td>
                            {{$msg}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>支付类型</strong>
                        </td>
                        <td>
                            {{$paytype}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!--End step -->
        </div><!--End col-md-8 -->

        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">感谢您!</h3>
                <p>
                    奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天
                </p>
                <hr>
                <a class="btn_full_outline" href="/tprint/{{$order->id}}" target="_blank">订单信息</a>
            </div>
            <div class="box_style_4">
                <i class="icon_set_1_icon-90"></i>
                <h4>联系我们</h4>
                <a href="tel://004542344599" class="phone">+025-58761818</a>
                <small>周一 至 周日 9.00am - 7.30pm</small>
            </div>
        </aside>

    </div><!--End row -->
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>需要帮助?</h3>
                <a href="#" id="phone">+025-58761818</a>
                <a href="#" id="email_footer">services@allinnewzealand.com</a>
            </div>
            <div class="col-md-2 col-sm-3" style="margin-left:10%;">
                <h3>关于我们</h3>
                <ul>
                    <li><a href="#">我们是谁</a></li>
                    <li><a href="/faq.html">常见问题</a></li>
                    <li><a href="#">使用条款</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3" style="margin-left:10%;">
                <h3>其他内容</h3>
                <ul>
                    <li><a href="#">最新资讯</a></li>
                    <li><a href="#">热门房产</a></li>
                </ul>
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
<script>
    function changeVal(obj)
    {
        var $button = $(obj);
        var oldValue = $button.parent().find("input").val();
        var p = $button.parent().parent();
        var dmon = p.next().text(), zmon = p.next().next();
        var zprice = 0;
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        zprice = parseFloat(dmon) * parseFloat(newVal);
        $button.parent().find("input").val(newVal);
        zmon.text(zprice);
        sumPrice();
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
            sumPrice();
        }
    }
    function sumPrice()
    {
        var sum=0;
        $("#table tbody").find("tr").each(function () {
            sum =sum+parseFloat($(this).find("td").eq(3).text());
        });
        $("#sum").text(sum);
    }
    $(function () {
        $("#sel_table").find("input[type='checkbox']").each(function () {
            $(this).change(function () {
                var text,id=$(this).attr("id").split('_')[1];
                $(this).next().find("span").each(function () {
                    if ($(this).css("opacity") == "0") {
                        text = $(this).text();
                    }
                });
                if (text == "Yes") {
                    var typeText = $(this).parent().parent().prev().find("span").text(), mon = $(this).parent().parent().prev().find("strong").text();
                    var tr = "<tr id='tr_" + id + "'><td><span class=\"item_cart\">" + typeText + "</span></td><td><div class=\"numbers-row\"><input type=\"text\" onkeyup=\"changeNum(this)\" value=\"1\" id=\"quantity_1\" class=\"qty2 form-control\" name=\"quantity_1\"><div id='add_" + id + "' class=\"inc button_inc\" onclick=\"changeVal(this)\">+</div><div class=\"dec button_inc\" id='r_" + id + "' onclick=\"changeVal(this)\">-</div>"
                    tr = tr + "</div></td><td><strong>" + mon.split('¥')[1] + "</strong></td><td><strong>0.00</strong></td><td class=\"options\"><a href=\"#\"><i class=\"icon-trash\"></i></a><a href=\"#\"><i class=\"icon-ccw-2\"></i></a> </td></tr>";
                    $("#order_tbody").append(tr);
                }
                else {
                    $("#table").find("tr").each(function () {
                        var trId="tr_"+id;
                        if ($(this).attr("id") == trId)
                        {
                            $(this).remove()
                        }
                    });
                }
                sumPrice();
            })

        })


    })
</script>
</body>
</html>