<?php
namespace app\api\validate;

use app\api\validate\BaseValidate;

/**
* 
*/
class School extends BaseValidate
{
	protected $rule = [
		'page'=>'ispositiveinteger'
	];	
	protected $message =[
		'page.ispositiveinteger'=>'页数必须是正整数'
	];
	
}
