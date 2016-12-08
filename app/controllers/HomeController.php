<?php
namespace controllers;
use Illuminate\Database\Eloquent\Model;
use services\View;
/**
 * Created by PhpStorm.
 * User: zhiduoxin6
 * Date: 2016/12/6
 * Time: 17:21
 */
class HomeController extends BaseController
{
    public function home()
    {
        echo "<h1>控制器成功！</h1>";

        //require dirname(__FILE__).'/../views/home.php';
        $this->view = View::make('home')
            ->with('article','lasasdf')
            ->withTitle('wenhaiqing')
            ->withFuckMe('hehe');
    }

}