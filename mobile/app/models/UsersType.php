<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class UsersType extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'users_type';
	protected $primaryKey = 'user_id';
	public $timestamps = false;
	protected $fillable = array('enterprise_personal', 'companyname', 'contactname', 'companyaddress', 'industry', 'surname', 'givenname', 'agreement', 'country', 'province', 'city', 'district');
	protected $guarded = array();
}

?>
