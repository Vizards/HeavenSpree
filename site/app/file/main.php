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
	public function download_action()
	{
		$url = @base64_decode($_GET['url']);

		if (! $url)
		{
			H::redirect_msg(AWS_APP::lang()->_t('文件未找到'));
		}

		$path = get_setting('upload_dir') . '/' . str_replace(get_setting('upload_url'), '', $url);

		if (strstr($path, '..') OR !file_exists($path))
		{
			H::redirect_msg(AWS_APP::lang()->_t('文件未找到'));
		}

		HTTP::force_download_header(base64_decode($_GET['file_name']), filesize($path));

		readfile($path);
	}
}