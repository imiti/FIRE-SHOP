<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class Seckill extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seckill';
	protected $primaryKey = 'sec_id';
	public $timestamps = false;
	protected $fillable = array('acti_title', 'begin_time', 'is_putaway', 'acti_time', 'add_time');
	protected $guarded = array();
}

?>
