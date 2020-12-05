<?php
namespace app\admin\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return time();
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'This is Admin => hello admin,' . $name;
    }
}
