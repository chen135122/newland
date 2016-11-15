<?php
return [
    'use_alias'    => env('WECHAT_USE_ALIAS', false),
    'app_id'       => env('WECHAT_APPID', 'wxbf7a6d0b392ce5db'), // 必填
    'secret'       => env('WECHAT_SECRET', 'dd1b309aef23dfd916867a21688ba4ea'), // 必填
    'token'        => env('WECHAT_TOKEN', '1287337101'),  // 必填
    'encoding_key' => env('WECHAT_ENCODING_KEY', 'hpr825QaxxKQ9Ms3IhjQdsw8vnDl1w9s') // 加密模式需要，其它模式不需要
];