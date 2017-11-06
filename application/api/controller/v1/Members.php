<?php
namespace app\api\controller\v1;

use app\api\Validate\Members as membersValidate;
use app\api\model\Members as MembersModel;
use think\Request;
use think\Session;


/**
* 用户管理
*/

class Members
{

	
	public function login()
	{
		//检查账号密码是否正确		
		$arr = Request::instance()->param();
		$members = new MembersModel;
		$members = $members->Memberslogin($arr);
		return $members;		
	}
	//注册用户
	public function register(){
		
		//验证数据
		(new membersValidate())->gocheck();
		
		//添加数据
		$members = new MembersModel;
		$members = $members->RegMembers($date);
 		if (!$members) 
 			return ['code'=>401,'err_msg'=>'添加失败'];
 		return ['code'=>200,'msg'=>'添加成功'];
	}
	//更新用户信息
	public function updateMembers(){
		$date=input('param.');
		$members = new MembersModel;
		$members = $members->upMembers($date);
		if (!$members) 
			return ['code'=>401,'err_msg'=>'没有找到用户'];
		return ['code'=>200,'msg'=>'会员更新成功'];
	}
	//更改密码
	public function upPswMembers(){

		$date = input('param.');
		$members = (new MembersModel())->upPswMembers($date);
		if ($members)		
		return ['code'=>200,'msg'=>'更改成功'];
	}
	/*
	删除用户信息   可以去掉一般不支持删除
	
	public function deleteMembers($account){
		$members = MembersModel::destroy(['account'=>$account]);
		if (!$members) 
			return ['code'=>401,'err_msg'=>'没有找到用户'];
		return ['code'=>200,'msg'=>'会员删除成功'];
	}
	*/
}
