<?php

namespace app\api\Validate;

use app\api\validate\BaseValidate;

/**
* 
*/
class Members extends BaseValidate
{
	protected $rule = [
		'nickname'=>'require|max:25',
		'account'=>'require|max:25',			
		'password'=>'min:6|require',
		'birthday'=>'date',
		'sex'=>'in:0,1',
		'phone'=>'length:11|ispositiveinteger',
		'province'=>'chs',
		'city'=>'chs',
		'area'=>'chsAlphaNum'
	];
	protected $massage = [
		'nickname.require' => '必须填写昵称',
		'account.require'  => '必须填写账号',
		'phone.ispositiveinteger'=>'电话必须是正整数'
	]
	
}