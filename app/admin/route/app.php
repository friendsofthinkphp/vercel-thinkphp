<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

Route::post('member', function () {
    return json([
        'method' => request()->method(),
        'action' => 'Create User',
        'params' => request()->param(),
    ]);
});

Route::put('member/:name', function ($name) {
    return json([
        'method' => request()->method(),
        'action' => 'Update User => ' . $name,
        'params' => request()->put(),
    ]);
});

Route::get('member/:name', function ($name) {
    return json([
        'method' => request()->method(),
        'action' => 'Get User => ' . $name,
    ]);
});

Route::delete('member/:name', function ($name) {
    return json([
        'method' => request()->method(),
        'action' => 'Delete User => ' . $name,
    ]);
});
