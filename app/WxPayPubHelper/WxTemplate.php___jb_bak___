<?php
header('Content-Type: text/html; charset=UTF-8');
/**
 * Created by PhpStorm.
 * User: StandOpen
 * Date: 15-1-7
 * Time: 9:41
 */
class WxTemplate
{
    protected $appid;
    protected $secrect;
    protected $accessToken;

//    function  __construct($appid, $secrect)
//    {
//        $this->appid = $appid;
//        $this->secrect = $secrect;
//        $this->accessToken = $this->getToken($appid, $secrect);
//    }
    function s()
    {
        return "1";
    }
    /**
     * 发送post请求
     * @param string $url
     * @param string $param
     * @return bool|mixed
     */
    function request_post($url = '', $param = '')
    {
        $ch = curl_init(); //初始化curl
        curl_setopt($ch, CURLOPT_URL, $url); //抓取指定网页
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
        if(!empty($param))
        {
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$param);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
        $data = curl_exec($ch); //运行curl
        curl_close($ch);
        return $data;
    }


    /**
     * 发送get请求
     * @param string $url
     * @return bool|mixed
     */
    function request_get($url = '')
    {
        if (empty($url)) {
            return false;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    /**
     * @param $appid
     * @param $appsecret
     * @return mixed
     * 获取token
     */
     function getToken()
    {
        $appId  = 'wxbf7a6d0b392ce5db';
        $secret = 'dd1b309aef23dfd916867a21688ba4ea';

        $TOKEN_URL="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appId."&secret=".$secret;

        $json=file_get_contents($TOKEN_URL);
        $result=json_decode($json);
        $ACC_TOKEN=$result->access_token;
        return $ACC_TOKEN;
    }


    /**
     * 发送自定义的模板消息
     * @param $touser
     * @param $template_id
     * @param $url
     * @param $data
     * @param string $topcolor
     * @return bool
     */
    public function doSend( $data)
    {
        /*
         * data=>array(
                'first'=>array('value'=>urlencode("您好,您已购买成功"),'color'=>"#743A3A"),
                'name'=>array('value'=>urlencode("商品信息:微时代电影票"),'color'=>'#EEEEEE'),
                'remark'=>array('value'=>urlencode('永久有效!密码为:1231313'),'color'=>'#FFFFFF'),
            )
         */
//        $template = array(
//            'touser' => $touser,
//            'template_id' => $template_id,
//            'url' => $url,
//            'topcolor' => $topcolor,
//            'data' => $data
//        );
        //$json_template = json_encode($template);
        $token=$this->getToken();
        $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$token;

        $dataRes = $this->request_post($url,$data);
        return json_decode($dataRes);
    }
}