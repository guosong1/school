<?php
namespace app\api\validate;


use api\validate\BaseValidate;
/**
* 
*/
class TokenGet extends BaseValidate
{
	protected  $rule=[
		'code' => 'require|isNotEmpty'
	];
 	protected $message=[
 		'token' => '没有token还想访问程序，开玩乐！'
 	];
 	
}