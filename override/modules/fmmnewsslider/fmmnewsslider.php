 <?php
/*
 *****************************************************************************
 * Welcome to Module's Section. 
 * This module is created for Learning Purpose only.
 *****************************************************************************
 */

 if (!defined('_PS_VERSION_')) 
 	exit;

  include_once(dirname(__FILE__) . '/models/newsBlock.php');

 class FmmNewsSliderOverride extends FmmNewsSlider
 {
	public function hookdisplayHome($params)
	{
		$newsInfo = newsBlock::getDetail();
		$this->context->smarty->assign(array(
						'link_value'=> Configuration::get('PS_REWRITING_SETTINGS'),
						'newsInfos' => $newsInfo,
						'nNews' => count($newsInfo),
						'module_link' => $this->context->link->getModuleLink('fmmnewsslider', 'display')));
				
		return $this->display(__FILE__, 'fmmnewsslider.tpl');
	}
}