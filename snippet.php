# in this custom snippet we load Smarty and assign a var into a template then we would let it print it
$modx->getService('smarty','smarty.modSmarty');
$modx->smarty->assign('Name','Irina');
echo $modx->smarty->fetch(MODX_BASE_PATH.'assets/ServiceOptions.Tpl');
#the result should be "Hi Irina"
