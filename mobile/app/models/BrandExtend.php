<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class BrandExtend extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'brand_extend';
	public $timestamps = false;
	protected $fillable = array('brand_id', 'is_recommend');
	protected $guarded = array();
}

?>