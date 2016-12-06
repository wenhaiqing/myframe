<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('view/(:num)', function($f) {
    echo "成功！".$f;
});

Macaw::get('(:all)', function($fu) {
    echo '未匹配到路由<br>'.$fu;
});

Macaw::dispatch();