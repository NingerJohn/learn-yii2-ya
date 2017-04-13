<?php

/**
* BaseController
* 整个项目公用控制器
* @author NJ 2017年4月3日17:14:50
*/
class BaseController extends \yii\web\Controller
{
	public $data;
	function init()
	{
		parent::init();
		$this->data = $this->initBaseData();
	}

	/**
	 * 初始化基础数据
	 * @return array 基础数据
	 */
	protected function initBaseData()
	{
		return [
			'timestamp'=>time(),
		];
	}


}



?>