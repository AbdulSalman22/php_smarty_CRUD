<?php
require_once('smarty_settings.php');
require_once('class/feedback.php');

$feedback = new feedback();

$smarty->assign('title', 'Smarty');
$smarty->assign('listdata', $feedback->GetFeedbackAll());
$smarty->assign('formstatus', isset($_GET['formstatus']) ? $_GET['formstatus'] : null);
$smarty->display('index.tpl');