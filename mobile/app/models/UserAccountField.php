<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace app\models;

class UserAccountField extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'user_account_fields';
	public $timestamps = false;
	protected $fillable = array('user_id', 'account_id', 'bank_number', 'real_name');
	protected $guarded = array();
}

?>
