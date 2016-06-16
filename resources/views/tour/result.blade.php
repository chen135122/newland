
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
        #top_links{
            float: right;
        }
        #top_links li{
            float: left;
        }
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
@include('layouts.partials.top')
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
                <p>如果想要微信查看此行程，可以用微信扫描下方的二维码</p>
              <div>{!!QrCode::size(300)->generate("http://m.allinnewzealand.com/tour/".$travel->id)!!}</div>

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
                            上海
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>出发时间</strong>
                        </td>
                        <td>
                            2016年3月26号
                        </td>
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<strong>目的地</strong>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--新西兰--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<strong>抵达时间</strong>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--2015年12月1号--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td>
                            <strong>支付状态</strong>
                        </td>
                        <td>
                            {{App\Http\Controllers\TourController::status($order->status)}}
                        </td>
                    </tr>
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<strong>支付类型</strong>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--{{$paytype}}--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    </tbody>
                </table>
            </div><!--End step -->
        </div><!--End col-md-8 -->

        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">感谢您!</h3>
                <p>
                    {{$travel->hugetitle}}
                </p>
                <hr>
                <a class="btn_full_outline" href="/tprint/{{$order->id}}" target="_blank">订单信息</a>
            </div>
            @include('layouts.partials.right_side')
        </aside>

    </div><!--End row -->
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 ">
                <img src="/img/logo_sticky2.png" height="60" alt="All IN New Zealand" data-retina="true" class="logo_sticky">
            </div>
            <div class="col-md-6  col-sm-6 col-xs-6 " >
                <p class="footer_l">
                    客服热线：025-58761818 邮箱：services@allinnewzealand.com<br/>
                    地址：江苏省南京市鼓楼区广州路189号民防大厦801<br/>
                    产品体验店：江苏省南京市北京东路8号江苏省广播电视台2F<br/>
                    几维说kiwi say 版权所有
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6" >
                <img src="/img/showqrcode.jpg" width="100" height="100"/>
            </div>
        </div>

    </div>
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