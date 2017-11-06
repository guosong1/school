<?php

namespace app\api\controller\v1;

use api\validate\Token as tokenValidate;

class Token 
{
	public function getToken(){
		(new TokenGet())->gocheck();
		return $token;
	}


}