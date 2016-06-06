
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ansonika">
    <title>All In New Zealand - 新西兰旅游置业</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <!-- BASE CSS -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/newewm.css" rel="stylesheet">
    <!-- Google web fonts -->
    <link href="http://fonts.useso.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.useso.com/css?family=Gochi+Hand" rel="stylesheet" type="text/css">
    <link href="http://fonts.useso.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>

    <!-- Radio and check inputs -->
    <link href="/css/skins/square/grey.css" rel="stylesheet">
    <link href="/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="/css/demo.css" type="text/css" rel="stylesheet">
</head>
<body>
<aside class="col-lg-3 col-md-3">
    <div class="box_style_2">
        <a class="btn_full" onclick="editstatus(2)">确认登录</a>
        <a class="btn_full" onclick="Ceng(2)">取消登录</a>
    </div>
</aside>
<br>
</body>
<script src="/js/jquery-1.11.2.min.js"></script>
<script>
    $(document).ready(function () {
        //setInterval("ajaxstatus()", 500);
    });
    function editstatus($id)
    {
        $.ajax({
            url: "status",
            type: "GET",
            data: "",
            success: function (data) {
                if (data!="0") { //订单状态为1表示支付成功
                    window.location.href = "/"; //页面跳转
                }
                else {
                    //alert("1")
                }
            },
            error: function () {
                //alert("O No~~~");
            }
        });
    }
    function ajaxstatus() {
            $.ajax({
                url: "getseesion",
                type: "GET",
                data: "",
                success: function (data) {
                    if (data!="0") { //订单状态为1表示支付成功
                        window.location.href = "/"; //页面跳转
                    }
                    else {
                        //alert("1")
                    }
                },
                error: function () {
                    //alert("O No~~~");
                }
            });
    }
</script>
</html>