<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Contracts\Repository\Article;

interface CategoryRepositoryInterface
{
	public function all($cat_id, $columns, $offset);

	public function detail($cat_id, $columns);

	public function create(array $data);

	public function update(array $data);

	public function delete($id);
}


?>
