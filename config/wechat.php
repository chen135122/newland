<?php
return [
    'use_alias'    => env('WECHAT_USE_ALIAS', false),
    'app_id'       => env('WECHAT_APPID', 'wxcf1588ee73525cea'), // 必填
    'secret'       => env('WECHAT_SECRET', '2d2e236464875cea7218559df7965b23'), // 必填
    'token'        => env('WECHAT_TOKEN', '1287337101'),  // 必填
    'encoding_key' => env('WECHAT_ENCODING_KEY', 'hpr825QaxxKQ9Ms3IhjQdsw8vnDl1w9s') // 加密模式需要，其它模式不需要
];