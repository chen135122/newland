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
if($openid||$nickname)
{
  $template=array(
                'touser'=>"'.$openid.'",
                'template_id'=>"oaC5SYXWR4k7VU1D_kZsBtfPQkzKN__ih0_jUhXQi58",
                'url'=>'http://www.baidu.com',
                'data'=>array(
                        'first'=>array(
                                'value'=>"您好,'.$nickname.',您已经登录成功!"
                        ),
                        'keyword1'=>array(
                                'value'=>"几维说",
                                //'color'=>"#743A3A",
                        ),
                        'keyword2'=>array(
                                'value'=>"您已经通过PC扫码成功登录PC端",
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
//$content="大家好";
//$touser="onjnuslHgho_parKy-dJy-1kUlfc";
?>
<script>
    if('<?php $result->errcode?>'=="0")
    {
        window.opener=null;
        window.open('','_self');
        window.close();
    }
</script>
