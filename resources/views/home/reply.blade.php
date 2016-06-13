<?php

?>
<?php
//require_once app_path().'/WxPayPubHelper/customer.php';
//if(isset($_REQUEST['tousername'])||isset($_REQUEST['content']))
//{
//    $touser = $_REQUEST['tousername'];
//    $content = $_REQUEST['content'];
//    //$token=$_POST["token"];
//    $result = _reply_customer($touser, $content);
//}
require_once app_path().'/WxPayPubHelper/WxTemplate.php';
$tem=new WxTemplate();
//$result1=$tem->getToken();
//$result= __construct($APPID,$APPSECRET);
$openid=$_REQUEST['openid'];
$nickname=$_REQUEST['nickname'];

if(isset($openid)||isset($nickname))
{
    echo $openid;
  $template=array(
                'touser'=>strval($openid),
                'template_id'=>"7AR3rz8WAIWyPEWjCXdh508G1z6-g1n4068Td2uWoIE",
                'url'=>'http://m.allinnewzealand.com/app/site/index',
                'data'=>array(
                        'first'=>array(
                                'value'=>"您好，您已在电脑端成功登录!"
                        ),
                        'keyword1'=>array(
                                'value'=>$nickname,
                                //'color'=>"#743A3A",
                        ),
                        'keyword2'=>array(
                                'value'=>date('y-m-d h:i:s',time()),
                                //'color'=>"#743A3A",
                        ),
                        'remark'=>array(
                                'value'=>"如有疑问,请拨打 +025-58761818",
                                //'color'=>"#743A3A",
                        )
                )
          );
}
$result=$tem->doSend(urldecode(json_encode($template)));
 echo json_encode($result);
?>
<script>
    if("<?php echo $result->errcode; ?>" =="0")
    {
        window.location="http://m.allinnewzealand.com/app/site/index";
    }
</script>
