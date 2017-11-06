<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

	Route::rule('','index/index/index','get|post');
    

    Route::rule('api/:varsion/index','api/:varsion.Index/index');


	Route::rule('api/:varsion/register','api/:varsion.Members/register');
	Route::rule('api/:varsion/login/:account','api/:varsion.Members/login');
    Route::rule('api/:varsion/upmembers/:account','api/:varsion.Members/updateMembers');
    //Route::rule('api/:varsion/delmembers/:account','api/:varsion.Members/deleteMembers');
    
    
	Route::rule('api/:varsion/school','api/:varsion.School/school');
    Route::rule('api/:varsion/slurschool/:sname','api/:varsion.School/slurschool');
    Route::rule('api/:varsion/delschool','api/:varsion.School/delschool');