<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class WechatRedpackAdvertice extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_redpack_advertice';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'market_id', 'icon', 'content', 'url');
	protected $guarded = array();
}

?>
