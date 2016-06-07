<?php
require_once app_path().'/WxPayPubHelper/customer.php';
if($_GET['action'] == "reply"){
    echo "1";
    $touser = $_POST['tousername'];
    $content = $_POST['content'];
    $token=$_POST["token"];
    $result = _reply_customer($touser, $content,$token);
}
//$content="大家好";
//$touser="onjnuslHgho_parKy-dJy-1kUlfc";
?>
