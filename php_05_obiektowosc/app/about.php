<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();

$smarty->assign('conf', $conf);
$smarty->assign('page_title', 'O projekcie');
$smarty->assign('page_header', 'O projekcie');

$smarty->display($conf->root_path.'/app/about.tpl');
