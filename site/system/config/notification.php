<?php

$config['action_details'][notify_class::TYPE_PEOPLE_FOCUS] = array(
	'user_setting' => 1,
	'combine' => 0,
	'desc' => '有人关注了我'
);

$config['action_details'][notify_class::TYPE_NEW_ANSWER] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我关注的主题有了新的回复'
);

$config['action_details'][notify_class::TYPE_INVITE_QUESTION] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '有人邀请我回复主题'
);

$config['action_details'][notify_class::TYPE_QUESTION_COMMENT] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我的主题被评论'
);

$config['action_details'][notify_class::TYPE_ANSWER_COMMENT] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我的主题评论被回复'
);

$config['action_details'][notify_class::TYPE_COMMENT_AT_ME] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '有主题评论提到我'
);

$config['action_details'][notify_class::TYPE_ANSWER_COMMENT_AT_ME] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '有回复评论提到我'
);

$config['action_details'][notify_class::TYPE_ANSWER_AT_ME] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '有回复提到我'
);

$config['action_details'][notify_class::TYPE_ANSWER_AGREE] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我的回复收到赞同'
);

$config['action_details'][notify_class::TYPE_ANSWER_THANK] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我的回复收到感謝'
);

$config['action_details'][notify_class::TYPE_QUESTION_THANK] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我发布的主题收到感謝'
);

$config['action_details'][notify_class::TYPE_MOD_QUESTION] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我的主题被编辑'
);

$config['action_details'][notify_class::TYPE_REMOVE_ANSWER] = array(
	'user_setting' => 0,
	'combine' => 1,
	'desc' => '我发表的回复被删除'
);

$config['action_details'][notify_class::TYPE_REDIRECT_QUESTION] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我发布的主题被重定向'
);

$config['action_details'][notify_class::TYPE_CONTEXT] = array(
	'user_setting' => 0,
	'combine' => 0,
	'desc' => '文字通知'
);

$config['action_details'][notify_class::TYPE_ARTICLE_NEW_COMMENT] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '我的文章被评论'
);

$config['action_details'][notify_class::TYPE_ARTICLE_COMMENT_AT_ME] = array(
	'user_setting' => 1,
	'combine' => 1,
	'desc' => '有文章评论提到我'
);

$config['action_details'][notify_class::TYPE_ARTICLE_APPROVED] = array(
	'user_setting' => 0,
	'combine' => 0,
	'desc' => '文章通过审核'
);

$config['action_details'][notify_class::TYPE_ARTICLE_REFUSED] = array(
	'user_setting' => 0,
	'combine' => 0,
	'desc' => '文章未通过审核'
);

$config['action_details'][notify_class::TYPE_QUESTION_APPROVED] = array(
	'user_setting' => 0,
	'combine' => 0,
	'desc' => '主题通过审核'
);

$config['action_details'][notify_class::TYPE_QUESTION_REFUSED] = array(
	'user_setting' => 0,
	'combine' => 0,
	'desc' => '主题未通过审核'
);
