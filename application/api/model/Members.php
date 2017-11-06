<?php
namespace app\api\model;

use think\Db;
use think\Session;
use think\Request;
use app\api\model\BaseModel;



class Members extends BaseModel
{
	protected $hidden = ['id','password','salt','ctime','gtime'];
	
	
	
    public function Memberslogin($arr){
    	$members=Members::where('account',$arr['account'])->find();
    	
    	if (!$members) {
    		return ['code'=>400,'err_msg'=>'账号输入错误'];
    	}elseif('123'.md5($arr['password'])!=$members['password']) {
    		return ['code'=>400,'err_msg'=>'密码不正确'];
    	}else{
    		$tokens = $arr['account'];
    		
    		return ['code'=>200,'msg'=>'登陆成功'];
    	}    	
    }

	public function RegMembers($date){		
		$members = new Members([
			'nickname'=>$date['nickname'],
			'account'=>$date['account'],			
			'password'=>'123'.md5($date['password']),			
			'birthday'=>$date['birthday'],
			'sex'=>$date['sex'],
			'phone'=>$date['phone'],			
			'province'=>$date['province'],
			'city'=>$date['city'],
			'area'=>$date['area'],
			'headimgurl'=>$date['headimgurl']
		]);	
		$members->save();
		return $members;		
	}

	public function upMembers($date){			
		$list = [
			'nickname'=>$date['nickname'],						
			'birthday'=>$date['birthday'],
			'sex'=>$date['sex'],
			'phone'=>$date['phone'],
			'province'=>$date['province'],
			'city'=>$date['city'],
			'area'=>$date['area'],
			'headimgurl'=>$date['headimgurl']
		];
		$members=(new Members())->save($list,['account'=>$date['account']]);
		return $members;
	}	

	public function upPswMembers(){
		$members = Members::where('account',$date['account']);
		if ('123'.md5($date['password'])!=$members['password']) {
			return ['code'=>400,'err_msg'=>'跟原始密码不一致'];
		}elseif ($date['password1']!=$date['password2']) {
			return ['code'=>400,'err_msg'=>'两次输入的密码不一样'];
		};
		$psw = $members->setField('password', '123'.md5($date['password1']));
		if (!$psw) {
			return ['code'=>400,'err_msg'=>'更改不成功'];
		} else {
			return true;
		}		
	}
}