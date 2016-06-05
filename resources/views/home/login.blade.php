
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
    <div>{!!QrCode::size(300)->generate("https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcf1588ee73525cea&redirect_uri=http://w.chitunet.com/login&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect")!!}</div>
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
<?php
//$url=urldecode("https%3A%2F%2Fpassport.yhd.com%2Fwechat%2Fcallback.do");
//$url=UrlEncode("https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcf1588ee73525cea&redirect_uri=http://w.chitunet.com/login&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect");
?>
<script>
    if('{{$success}}'=="ok")
    {
        alert("1");
    }
</script>
</html>