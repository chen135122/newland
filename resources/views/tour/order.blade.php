
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
    <title>在线预订-新西兰旅游</title>

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
@include('layouts.partials.top')
<section id="hero_2">
    <div class="intro_title animated fadeInDown">

        <div class="bs-wizard">

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">订单</div>
                <div class="progress"><div class="progress-bar" style="background-color:#e04f67;"></div></div>
                <a href="#" class="bs-wizard-dot newc"></a>
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
                    <th colspan="5">
                        项目清单
                    </th>
                </tr>
                </thead>
                <tbody>
                @for($i=0;$i<count($priceBase);$i++)
                    <tr>
                        <td style="width:10%">
                            <i class="icon_set_1_icon-16"></i>
                        </td>
                        <td style="width:30%">
                            <nav class="col-md-9 col-sm-9 col-xs-9" style="padding-left:0px;z-index:{{count($priceBase)-$i}};">
                                <div class="main-menu">
                                    <ul>
                                        <li class="submenu">
                                            <a class="show-submenu">{{$priceBase[$i]->title}}</a>
                                            <ul>
                                                <li><p style="word-break:break-all;word-wrap:break-word;padding:5px;">{{$priceBase[$i]->remark}}</p></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- End main-menu -->

                            </nav>
                            <strong></strong>
                        </td>
                        <td>
                            ￥{{$priceBase[$i]->price}}
                        </td>
                        <td style="width:25%">
                            @if($priceBase[$i]->title=="航班")
                            <a id="sm" style="color:red;display:none;">航班价格会随时间变动</a>
                                @endif
                        </td>
                        <td style="width:35%">
                            <label class="switch-light switch-ios pull-right">
                                <input type="checkbox" name="option_1" id="option_1"  checked value="{{$priceBase[$i]->id}}">
                                    <span>
                                        <span>No</span>
                                        <span>Yes</span>
                                    </span>
                                <a></a>
                            </label>

                        </td>
                    </tr>
                    @endfor
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
                           {{$travel->bigtitle}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            出发日期
                        </td>
                        <td class="text-right">
                            {{date("Y年n月d日",$date)}}
                        </td>
                    </tr>
                    {{--<tr class="total">--}}
                        {{--<td>--}}
                            {{--定金--}}
                        {{--</td>--}}
                        {{--<td class="text-right">--}}
                            {{--{{($travel->oprice)*$perNum}}--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    </tbody>
                </table>

                {{--<a class="btn_full" onclick="Ceng(1)">支付宝</a>--}}
                <a class="btn_full" onclick="Ceng(2)">预订</a>

                <!--<a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>-->
            </div>
            <div class="box_style_4">
                <i class="icon_set_1_icon-90"></i>
                <h4>联系我们</h4>
                <a href="tel://004542344599" class="phone">+025-58761818</a>
                <small>周一 至 周日  8.30 - 18.30</small>
            </div>
        </aside><!-- End aside -->

    </div><!--End row -->
</div><!--End container -->

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
<script src="/js/bootstrap.min.js"></script>
</div>
{{--<script>$(function ()--}}
    {{--{ $("[data-toggle='popover']").popover();--}}
    {{--});--}}
{{--</script>--}}
<script>
    function Ceng(type) {
        if ('{{$login}}') {
            document.getElementById('ceng').style.display = 'block';
            document.getElementById('close').style.display = 'block';
            if (type == 1) {
                $("#orderform").attr("action", "/pay");
            }
            else {
                $("#orderform").attr("action", "/result");
            }
        }
        else {
            window.location="/auth/login";
        }
        //return false;
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
        $("#sel_table tbody tr").find("input[type='checkbox']").each(function () {
            $(this).change(function () {
                var $checked=$(this).is(":checked");
                var id=$(this).val();
                var len = $("#price").find(".baseprice_"+ id).length;
                if ($(this).is(":checked")) {
                    $(this).parent().parent().prev().find("a#sm").show();
                }
                else {
                    $(this).parent().parent().prev().find("a#sm").hide();
                }
                if ($checked == true && len < 1) {
                   var $input="<input  name='baseprice[]' id='baseprice_"+id+"' type='hidden' value='"+id+"'>";
                    $("#price").append($input);
                }
                else {
                    $("#price").find("input[type=hidden]").each(function () {
                        var trId="baseprice_"+id;
                        if ($(this).attr("id") == trId)
                        {
                            $(this).remove()
                        }
                    });
                }
            })
        })
//        $("#sel_table").find("input[type='checkbox']").each(function () {
//            $(this).change(function () {
//                var $checked=$(this).is(":checked");
//                var text, id = $(this).attr("id").split('_')[1];
//                var len = $("#order_tbody tr#tr_" + id).length;
//                if ($checked == true && len < 1) {
//                    var typeText = $(this).parent().parent().prev().find("span").text(), mon = $(this).parent().parent().prev().find("strong").text();
//                    var tr = "<tr id='tr_" + id + "'><td><span class=\"item_cart\">" + typeText + "</span></td><td><div class=\"numbers-row\"><input type=\"text\" onkeyup=\"changeNum(this)\" value=\"1\" id=\"quantity_1\" class=\"qty2 form-control\" name=\"quantity_1\"><div id='add_" + id + "' class=\"inc button_inc\" onclick=\"changeVal(this)\">+</div><div class=\"dec button_inc\" id='r_" + id + "' onclick=\"changeVal(this)\">-</div>"
//                    tr = tr + "</div></td><td class=\"options\"><a href=\"#\"><i class=\"icon-trash\"></i></a><a href=\"#\"><i class=\"icon-ccw-2\"></i></a> </td></tr>";
//                    $("#order_tbody").append(tr);
//                }
//                else {
//                    $("#table").find("tr").each(function () {
//                        var trId="tr_"+id;
//                        if ($(this).attr("id") == trId)
//                        {
//                            $(this).remove()
//                        }
//                    });
//                }
//            })
//
//        })

        $("#subOrder").click(function(){

             //validate();
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
                    data: { 'rout': $("#rout").val(),"perNum":'{{$perNum}}',"username":$("#username").val(),"userPhone":$("#userPhone").val(),"userEmail":$("#userEmail").val(),"content":$("#txt_content").val()  },
                    success: function(msg){
                        $("#orderform").submit();
                    }
                });
            }

        })

    })

</script>
<script type="text/javascript" charset="utf-8" src="/js/jquery.form.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/artdialog/dialog-plus-min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/Validform.js"></script>
<link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />

<div id="ceng" style="position:fixed;z-index:1000;left:0;top:0;right:0;background-color:#000;opacity: 0.5; filter:alpha(opacity=50);margin:1px 1px;display:none;width:100%;height:100%;text-align:center;">
</div>
<div id="close" style="position:fixed ;left:30%;top:0px;z-index:1001;background-color:#fff;margin:5% 0 0 0;padding:0px;display:none;width:361px;text-align:right">
    <i class="icon-cancel" onclick="closeCeng()"></i>
    <h3 style="text-align:left;padding-left: 10px;">填写联系人信息</h3>
    <hr>
    <div style="text-align:center;"><br>
    {{--<form id="orderform" name="orderform" action="/spay" method="post">--}}
        {{--<input  name="rout" id="rout" type="hidden" value="{{$route}}">--}}
        {{--<input  name="WIDout_trade_no" type="hidden" value="10000">--}}
        {{--<input  name="WIDsubject" type="hidden" value="{{$name}}">--}}
        {{--<input  name="WIDtotal_fee" type="hidden" value="2000">--}}
    {{--</form>--}}

        <form id="orderform" name=orderform action=/pay method=get  target="_blank">
                     <input  name="rout" id="rout" type="hidden" value="{{$route}}">
                    <input  name="subject" type="hidden" value="{{$name}}">
                    <input  name="total_fee" type="hidden" value="2000">
                    <input  name="startDate" type="hidden" value="{{$date}}">
                    <input  name="url" id="url" type="hidden" value="">
                     <input  name="perNum" id="perNum" type="hidden" value="{{$perNum}}">
            <div id="price">
                @foreach($priceBase as $price)
                    <input name="baseprice[]" id="baseprice_{{$price->id}}" type="hidden" value="{{$price->id}}">
                    @endforeach
            </div>
            <div class="form-group">
                <label for="txtUserName" class="col-sm-3 control-label" >联系人姓名</label>
                    <div class="col-sm-9" ><input  name="username" id="username" class="date-pick form-control" style="width:90%;" placeholder="用户名不能为空"  datatype="s1-10"  nullmsg="用户名不能为空" sucmsg=" " id="txtUserName"  name="txtUserName" >
                    <span class="Validform_checktip" ></span></div>
            </div>
            <div class="form-group">
                <label for="txtUserName" class="col-sm-3 control-label" >联系人电话</label>
                <div class="col-sm-9" ><input  name="userPhone" id="userPhone" class="date-pick form-control" style="width:90%;" datatype="/^(((1[1-9]{1}[0-9]{1}))+\d{8})$/" placeholder="联系人电话不能为空" errormsg="联系人电话格式有误"    nullmsg="联系人电话不能为空" sucmsg=" " >
                    <span class="Validform_checktip"></span></div>
            </div>
            <div class="form-group">
                <label for="txtUserName" class="col-sm-3 control-label" >联系人邮箱</label>
                <div class="col-sm-9" ><input  name="userEmail" id="userEmail" class="date-pick form-control" style="width:90%;" datatype="/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/" placeholder="请填写邮箱"  errormsg="联系人邮箱格式有误" nullmsg="请填写邮箱"     sucmsg=" " >
                    <span class="Validform_checktip"></span></div>
            </div>
            <div class="form-group">
                <label for="txtUserName" class="col-sm-3 control-label" >备注</label>
                <div class="col-sm-9" style="height:102px;"><textarea name="content" class="date-pick form-control" id="txt_content" style="width:90%;height:80px;"></textarea>
                    <span class="Validform_checktip"></span></div>
            </div>
        <input class="btn_full" type="submit" id="subOrder" style="width:80%;margin:0 0 40px 10%;" value="确定">
        </form>
    </div>
</div>
<style>
    .form-group{height: 45px;}
    .form-group label{
        width: 27%;
    }
    .form-group div.col-sm-9{
        width: 73%;
    }
    .icon-cancel:before{
        content: '\e81e';
        cursor:pointer;
        font-size: 20px;
        padding: 2px 2px;
    }
    #top_links{
        float: right;
    }
    #top_links li{
        float: left;
    }
    /*.form-group div.col-sm-9{*/
        /*margin-bottom: 20px;*/
    /*}*/
</style>
<script>
    $("#orderform").Validform({
        tiptype:3,
        label:".label",
        showAllError:true
    });
$("#url").val(window.location.href);
    var result=true;
{{--function  validate()--}}
{{--{--}}
            {{--var $username=$("#username");--}}
            {{--var $userPhone=$("#userPhone");--}}
            {{--var $userEmail= $("#userEmail");--}}
            {{--$("#phone").popover("show");--}}
            {{--if($username.val()=="")--}}
            {{--{--}}
            {{--$username.attr("data-content","用户名不能为空");--}}
            {{--$username.popover('show');--}}
                {{--result=false;--}}
            {{--}--}}
            {{--else {--}}
                {{--$username.popover('destroy');--}}
                {{--result=true;--}}
            {{--}--}}
            {{--if( $userPhone.val()=="")--}}
            {{--{--}}
                {{--$userPhone.attr("data-content","手机号码不能为空");--}}
                {{--$userPhone.popover("show");--}}
                {{--result=false;--}}
            {{--}--}}
            {{--else {--}}
                {{--$userPhone.popover('destroy');--}}
                {{--result=true;--}}
            {{--}--}}
            {{--var phonereg = /^(((1[1-9]{1}[0-9]{1}))+\d{8})$/;--}}
            {{--if(!phonereg.test($userPhone.val()))--}}
            {{--{--}}
                {{--$userPhone.attr("data-content","手机号填写有误");--}}
                {{--$userPhone.popover("show");--}}
                {{--result=false;--}}
            {{--}--}}
            {{--var emailreg= /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;--}}
            {{--if( !emailreg.test($userEmail.val()))--}}
            {{--{--}}
                {{--$userEmail.attr("data-content","邮箱格式有误");--}}
                {{--$userEmail.popover("show");--}}
                {{--result=false;--}}
            {{--}--}}
            {{--else {--}}
                {{--$userEmail.popover('destroy');--}}
                {{--result=true;--}}
            {{--}--}}
{{--}--}}
</script>
</body>
</html>