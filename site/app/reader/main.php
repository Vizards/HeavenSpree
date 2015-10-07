<?php
/*
+--------------------------------------------------------------------------
|   HeavenSpree [#RELEASE_VERSION#]
|   ========================================
|   by HeavenSpree Software
|   © 2011 - 2014 HeavenSpree. All Rights Reserved
|   http://www.HeavenSpree.com
|   ========================================
|   Support: HeavenSpree@qq.com
|
+---------------------------------------------------------------------------
*/


if (!defined('IN_ANWSION'))
{
	die;
}

class main extends AWS_CONTROLLER
{
	public function get_access_rule()
	{
		$rule_action['rule_type'] = 'black';

		$rule_action['actions'] = array();

		return $rule_action;
	}

	public function index_action()
	{
		$this->crumb(AWS_APP::lang()->_t('主题阅读'), '/reader/');

		TPL::assign('feature_list', $this->model('feature')->get_enabled_feature_list());

		TPL::output('reader/index');
	}
}