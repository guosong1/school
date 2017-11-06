<?php
namespace app\api\validate;

use think\Exception;
use think\Validate;
use think\Raquest;
/**
* 
*/
class BaseValidate extends Validate
{
	//获取参数并进行验证
	public function gocheck(){
		
		$param = input('param.');
		$result = $this->check($param);
		if(!$result) {
			$error = $this->error;
			throw new Exception($error);			
		}
		else{
			return true;
		}
	}

 	protected function ispositiveinteger($value,$rule='',$date='',$field=''){
		if(is_numeric($value) && is_int($value + 0) && ($value + 0)>0){
			return true;
		}else{
			return false;
			}
	}
	
	protected function isNotEmpty($value,$rule='',$date='',$field=''){
		if (empty($value)) {
			return false;
		} else {
			return true;
		}
 		
 	}

}