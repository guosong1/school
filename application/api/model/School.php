<?php

namespace app\api\model;

use think\Db;
use think\Raquest;
use app\api\model\BaseModel;

/**
* 
*/
class School extends BaseModel
{
	protected $hidden = ['id','sid','ctime','city','area','scode'];


	public function schoolmajors(){
		return $this->hasMany('Majors','sid');
	}
	

	public function schoolinfo($page){
		$school = School::with('schoolmajors')
		->page($page.",10")
		->select();
		return $school;
	}

	public function slurschool($page,$sname){
		$list = School::with('schoolmajors')
		->where('sname','like','%'.$sname.'%')
		->page($page.",5")
		->select();
		return $list;
	}
		
	public function delschool($date){
		$school=School()->where('sname',$date['sname'])->delete();
		return $school;	
	}
}