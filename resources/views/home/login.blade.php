
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ansonika">
    <title>几维说- 梦想生活从这里起航</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <!-- BASE CSS -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/newewm.css" rel="stylesheet">
    <!-- Google web fonts -->


    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>

    <!-- Radio and check inputs -->
    <link href="/css/skins/square/grey.css" rel="stylesheet">
    <link href="/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="/css/demo.css" type="text/css" rel="stylesheet">
</head>
<body style="background-color:#fff;">
<form method="get" id="reply" style="display:none;" action="/reply">
    <dl>
        <dd><strong></strong><input type="text" name="openid" class="text" value="{{$oppenid}}" /></dd>
        <dd><strong></strong><input type="text" name="nickname" class="text" value="{{$nickname}}" /></dd>
    </dl>
</form>
{{--<aside class="col-lg-3 col-md-3" style="margin-top: 20%;">--}}
    {{--<div class="box_style_2" style="border:none;">--}}
        {{--<img src="/img/logo_sticky.png"><br><br><br>--}}
        {{--<span>即将登录"几维说",请确认是本人操作</span>--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<a class="btn_full" onclick="editstatus('{{$uuid}}','1','{{$userid}}')">确认登录</a>--}}
        {{--<a class="btn_full" onclick="editstatus('{{$uuid}}','2','{{$userid}}')">取消登录</a>--}}
    {{--</div>--}}
{{--</aside>--}}
<br>
</body>
<script src="/js/jquery-2.1.1.min.js"></script>
<script>
    $(document).ready(function () {
        //setInterval("ajaxstatus()", 500);
        $("#reply").submit();
    });
    function editstatus($id,$status,$userid)
    {
        $.ajax({
            url: "getseesion?uuid="+$id+"&usestatus="+$status+"&userid="+$userid,
            type: "GET",
            data: "",
            success: function (data) {
                if (data!="0") {
                    //alert(data);
                    //$("#reply").submit();
                }
                else {
                    alert("操作错误")
                }
            },
            error: function () {
                //alert("O No~~~");
            }
        });
    }

</script>
</html>