<?php
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: zhiduoxin6
 * Date: 2016/12/6
 * Time: 20:29
 */
class item extends Model

{
    protected $table = 'item';
    public $timestamps = false;

    public function itemget()
    {
        $users = Model::table('item')->get();
        return $users;
    }
}