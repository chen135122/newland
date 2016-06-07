<?php
require_once app_path().'/WxPayPubHelper/customer.php';
if($_GET['action'] == "reply"){
    $touser = $_POST['tousername'];
    $content = $_POST['content'];

    $result = _reply_customer($touser, $content);
}
//$content="大家好";
//$touser="onjnuslHgho_parKy-dJy-1kUlfc";
?>
