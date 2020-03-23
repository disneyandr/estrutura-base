<?php 

	require __DIR__ . '/config.php';
	
	$smarty = new SmartyBC();
	$smarty->setTemplateDir('App/View');
	$smarty->display('index.html');
 ?>