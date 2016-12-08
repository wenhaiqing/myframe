<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('view/(:num)', function($f) {
    echo "成功！".$f;
});

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::get('/','controllers\HomeController@home');

Macaw::dispatch();