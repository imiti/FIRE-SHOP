<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class RegExtendInfo extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'reg_extend_info';
	protected $primaryKey = 'Id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'reg_field_id', 'content');
	protected $guarded = array();
}

?>
