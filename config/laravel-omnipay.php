<?php

//return [
//
//	// The default gateway to use
//	'default' => 'paypal',
//
//	// Add in each gateway here
//	'gateways' => [
//		'paypal' => [
//			'driver'  => 'PayPal_Express',
//			'options' => [
//				'solutionType'   => '',
//				'landingPage'    => '',
//				'headerImageUrl' => ''
//			]
//		]
//
//];
return [

	// 默认支付网关
	'default' => 'alipay',

	// 各个支付网关配置
	'gateways' => [
		'paypal' => [
			'driver' => 'PayPal_Express',
			'options' => [
				'solutionType' => '',
				'landingPage' => '',
				'headerImageUrl' => ''
			]
		],

		'alipay' => [
			'driver' => 'Alipay_Express',
			'options' => [
				'partner' => '2088411593247008',//合作身份ID
				'key' => 'r0q49twoqh5b5qrf0gkuhco0ebumqmh0',//key(登录后有个查询id，key然后安装证书,显示的key)
				'sellerEmail' =>'dinghua@chitunet.com',//支付宝用户号
				'returnUrl' => 'http://nz.chitunet.com/result',
				'notifyUrl' => 'http://nz.chitunet.com/result'
			]
		]
	]

];