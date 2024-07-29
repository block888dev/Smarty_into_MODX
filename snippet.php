#<?php
# In this custom snippet MODX would load Smarty and assign some vars into a template. 
# Then it prints the result
$modx->getService('smarty','smarty.modSmarty');
$modx->smarty->assign('Name','Irina');

# Also, fetch some MODX template variable (TV) from a MODX Doc (MODX Resource id #110521)
$tvServiceOptions = $this->modx->getObject('modTemplateVarResource', array(
          'tmplvarid' => 18,
          'contentid' => 110521

));

# Just some logging into MODX Error log
if ( $tvServiceOptions ) {
            $this->modx->log(MODX_LOG_LEVEL_ERROR,  "data:" . print_r(json_decode($tvServiceOptions->get('value'),1),1) );
}
$this->modx->smarty->assign('ServiceOptions', json_decode( $tvServiceOptions->get('value'), 1) );
        
# Imagine we have a php var like $event arr
$this->modx->smarty->assign('EventService', $event['service']);
$this->modx->smarty->assign('EventAllDay', $event['allDay']);

echo $modx->smarty->fetch(MODX_BASE_PATH.'assets/ServiceOptions.Tpl');

# The result should be "Hi Irina"
# and followed with a selection of <options>

# Obviously it's not needed for simple output but when it comes to fetching some data and outputing it with a custom conditional then it's a smart way to use Smarty templator
