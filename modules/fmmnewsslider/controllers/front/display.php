<?php
class fmmnewssliderdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $myNews = newsBlock::displayLinkDetail();
    $my_id = Tools::getValue('id_news');
    
    $this->context->smarty->assign(
                array('News' => $myNews,
                      'currentNews_id' => $my_id,
                      'module_link' => $this->context->link->getModuleLink('fmmnewsslider', 'display')));

    $this->setTemplate('display.tpl');
  }
}
?>