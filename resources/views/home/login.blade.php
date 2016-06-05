
<?php
header("Content-type:text/html; charset=utf-8");
//header('Content-Type:text/html; charset=gb2312');
//header("content-type:image/png");
require_once 'dist/phpqrcode/phpqrcode.php';
$basedir = dirname('dist/phpqrcode/phpqrcode.php');//扫描当前文件路径 可自动设置
$value="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcf1588ee73525cea&redirect_uri=http://w.chitunet.com/login&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect";

$errorCorrectionLevel = "L";

$matrixPointSize = "5";
$value=urlencode($value);
QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
?>
{{QrCode::generate('Hello,LaravelAcademy!');}}
