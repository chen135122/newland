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
				'partner' => '2088411593247008',
				'key' => 'r0q49twoqh5b5qrf0gkuhco0ebumqmh0',
				'sellerEmail' =>'dinghua@chitunet.com',
				'returnUrl' => 'http://localhost:8000/result',
				'notifyUrl' => 'http://localhost:8000/result'
			]
		]
	]

];