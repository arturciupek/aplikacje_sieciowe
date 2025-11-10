<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('page_title', 'O projekcie');
$smarty->assign('page_header', 'O projekcie');

$smarty->display(_ROOT_PATH.'/app/about.tpl');
