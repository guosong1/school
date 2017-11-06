<?php
namespace app\api\model;

use think\Model;

/**
* 
*/
class BaseModel extends Model
{
	protected $autoWriteTimestamp = true;
	protected $createTime = 'ctime';
    protected $updateTime = 'gtime';
	
}
