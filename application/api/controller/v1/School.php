<?php

namespace app\api\controller\v1;

use  think\Db;
use  think\Session;
use  app\api\validate\Token;
use  app\api\model\School as schoolModel;
use  app\api\validate\School  as schoolValidate;

class School 
{
	
	public function valipage(){
		$page = input('param.page');
		(new schoolValidate)->gocheck();
		if (!$page) {
			return $page = 1;			
		}
		return $page;
	}

	//分页显示学校信息
	public function school(){
		$page = $this->valipage();
		$school=(new schoolModel)->schoolinfo($page);
		return $school;
	}

	//显示模糊查询的学校信息
	public function slurschool(){
		$page = $this->valipage();
		$sname = input('param.sname');		
		$school=(new schoolModel())->slurschool($page,$sname);
		return $school;

	}
	
	//删除学校信息
	public function delschool(){
		$date = input('param.');
		$school=(new schoolModel())->delschool($date);
		return $school;	
	}
}
