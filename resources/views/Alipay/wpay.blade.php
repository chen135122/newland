<?php
/**
 * Native（原生）支付-模式二-demo
 * ====================================================
 * 商户生成订单，先调用统一支付接口获取到code_url，
 * 此URL直接生成二维码，用户扫码后调起支付。
 *
 */
//使用统一支付接口
require_once app_path().'/WxPayPubHelper/WxPayPubHelper.php';
$unifiedOrder = new UnifiedOrder_pub();

//设置统一支付接口参数
//设置必填参数
//appid已填,商户无需重复填写
//mch_id已填,商户无需重复填写
//noncestr已填,商户无需重复填写
//spbill_create_ip已填,商户无需重复填写
//sign已填,商户无需重复填写
$unifiedOrder->setParameter("body",$subject);//商品描述
//自定义订单号，此处仅作举例
$timeStamp = time();
$out_trade_no = WxPayConf_pub::APPID."$timeStamp";
$unifiedOrder->setParameter("out_trade_no","$out_trade_no");//商户订单号
$unifiedOrder->setParameter("total_fee",$price*100);//总金额$price*100
$unifiedOrder->setParameter("notify_url",WxPayConf_pub::NOTIFY_URL);//通知地址
$unifiedOrder->setParameter("trade_type","NATIVE");//交易类型
//非必填参数，商户可根据实际情况选填
//$unifiedOrder->setParameter("sub_mch_id","XXXX");//子商户号
//$unifiedOrder->setParameter("device_info","XXXX");//设备号
//$unifiedOrder->setParameter("attach","XXXX");//附加数据
//$unifiedOrder->setParameter("time_start","XXXX");//交易起始时间
//$unifiedOrder->setParameter("time_expire","XXXX");//交易结束时间
//$unifiedOrder->setParameter("goods_tag","XXXX");//商品标记
//$unifiedOrder->setParameter("openid","XXXX");//用户标识
//$unifiedOrder->setParameter("product_id","XXXX");//商品ID

//获取统一支付接口结果
$unifiedOrderResult = $unifiedOrder->getResult();

//商户根据实际情况设置相应的处理流程
if ($unifiedOrderResult["return_code"] == "FAIL")
{
    //商户自行增加处理流程
    echo "通信出错：".$unifiedOrderResult['return_msg']."<br>";
}
elseif($unifiedOrderResult["result_code"] == "FAIL")
{
    //商户自行增加处理流程
    echo "错误代码：".$unifiedOrderResult['err_code']."<br>";
    echo "错误代码描述：".$unifiedOrderResult['err_code_des']."<br>";
}
elseif($unifiedOrderResult["code_url"] != NULL)
{
    //从统一支付接口获取到code_url
    $code_url = $unifiedOrderResult["code_url"];
    //商户自行增加处理流程
    //......
}

?>


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
</div>
<div align="center">
    <aside class="col-md-4">
        <div class="box_style_1">
            <table class="table table_summary">
                <tbody>
                <tr class="total">
                    <td>
                        行程
                    </td>
                    <td class="text-right">
                        {{$subject}}
                    </td>
                </tr>
                <tr class="total">
                    <td>
                        定金
                    </td>
                    <td class="text-right">
                       {{$price}}
                    </td>
                </tr>
                <tr>
                    <td>
                       订单号
                    </td>
                    <td id="perNum" class="text-right">
                        <?php echo $out_trade_no; ?>
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
<script src="/js/qrcode.js"></script>
<script>
    if(<?php echo $code_url != NULL; ?>)
    {

        var url = "<?php echo $code_url;?>";
        //参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
        alert(url);
        var qr = qrcode(10, 'Q');
        qr.addData(url);
        qr.make();
        var wording=document.createElement('p');
        wording.innerHTML = "微信支付";
        wording.style.fontFamily="Microsoft YaHei";
        var code=document.createElement('DIV');
        code.innerHTML = qr.createImgTag();
        var element=document.getElementById("qrcode");
        element.appendChild(wording);
        element.appendChild(code);
    }
    $(function(){
        $("#sub").click(function(){
            ajaxstatus();
        })
    })
   function  init()
   {
      setInterval("ajaxstatus()", 3000);
   }
    function ajaxstatus() {
            $.ajax({
                url: "/query?tradeNo=" +'<?php echo $out_trade_no; ?>',
                type: "get",
                data: "",
                success: function (data) {
                    if (data=="SUCCESS") { //订单状态为1表示支付成功
                        window.location.href = "/result?out_trade_no="+'{{$sn}}'+"&type=1"; //页面跳转
                    }
                }//,
//                error: function () {
//                    alert("请求订单状态出错");
//                }
            });
    }
    window.onload=init;
</script>
</html>