
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>微信安全支付</title>
    <style>
        #qrcode div img{
            width:180px;
            height: 180px;
        }
        .table{
            margin-top: 40px;
        }
        .table tr{
            background-color:#fff;
            line-height:40px;

        }
        .table tr td:first-child{
            font-family: 'Microsoft YaHei';
            width: 100px;
            text-align: center;
            font-style:normal;
        }
        .table tr td:last-child{
            width: 300px;
            text-align: center;
            font-family:FangSong_GB2312;
        }
    </style>
</head>
<body style="background-color: #f9f9f9;">
<div align="center" id="qrcode">
    <div>{!!QrCode::size(300)->generate("https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcf1588ee73525cea&redirect_uri=http://w.chitunet.com/callback&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect")!!}</div>
</div>
<div align="center">
    <aside class="col-md-4">
        <div class="box_style_1">
            <table class="table table_summary">
                <tbody>
                <tr class="total">
                    <td>
                        用户扫码登录
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </aside>
</div>
<br>
</body>
<script src="/js/jquery-1.11.2.min.js"></script>
<script>
    $(document).ready(function () {
        setInterval("ajaxstatus()", 500);
    });
    function ajaxstatus() {
            $.ajax({
                url: "callback",
                type: "GET",
                data: "",
                success: function (data) {
                    alert(data);
                    if (data!="0") { //订单状态为1表示支付成功
                        window.location.href = "/"; //页面跳转
                    }
                    else {
                        alert()
                    }
                },
                error: function () {
                    //alert("O No~~~");
                }
            });
    }
</script>
</html>