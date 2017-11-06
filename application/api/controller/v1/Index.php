<?php
namespace app\api\controller\v1;

use think\Request;
use think\Controller;
/**
* 
*/
class Index 
{
    public function index()
    {
    	$arr = 'guosong';
		return token($arr);

	}
}

