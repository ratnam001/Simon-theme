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

 class FmmNewsSlider extends Module
 {

 	public function __construct()
	{
		$this ->name = 'fmmnewsslider';
		$this ->tab = 'front_office_features';
		$this ->version = 1.1;
		$this ->author = 'FME Modules';
		$this ->need_instance = 1;
		$this ->ps_versions_compliancy = array('min' => '1.4' , 'max' => '1.6');

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('FMM News Slider');
		$this ->description = $this-> l('You can add latest News and Events about your website.');

	 	$this ->confirmUninstall = $this->l('Are you sure you want to uninstall?');

		if (!Configuration::get('FMM_NEWS_SLIDER'))
			$this->warning = $this->l('No name provided');
	}

	public function install()
		{
		
			if (!parent::install()
				|| !$this->registerHook('leftColumn')
				|| !newsBlock::createTable() 
				|| !newsBlock::createLangTable()
				|| !Configuration::updateValue('FMM_NEWS_SLIDER',7)
				)

			return false;
		}

	public function uninstall()
	{
		if (parent::uninstall() && newsBlock::dropTables())

		return true;
	}


		public function getContent()
		{


			$html = '';
			$this->_postProcess(); 			
			
			if (Tools::isSubmit('add'.$this->name) || Tools::isSubmit('update'.$this->name))
			{
				$helper = $this->addForm();
				if (Tools::isSubmit('update'.$this->name)) 
				{
					//echo "Hello Block"; exit;

					$id_news = (int)Tools::getValue('id_news');
					$id_lang = (int)Tools::getValue('id_lang');

				//----------------------------------------------------	

					$newz = newsBlock::getmyVal($id_news,$id_lang);
				//	echo "<pre>";var_dump($newz);exit;
				
					$helper->fields_value['title'] = $newz[0];
					foreach ($this->context->controller->_languages as $lang)
					$helper->fields_value['detail'][(int)$lang['id_lang']] = $newz[1][(int)$lang['id_lang']-1]["detail"];

					
				}

					
				//---------#### Display Messages ####------------// 
					if(Tools::isSubmit('added'.$this->name))
					{
						$html .= '<div class="conf alert alert-success">'.$this->l('News Added Successfully').'</div>';
					}
					elseif(Tools::isSubmit('edited'.$this->name))
					{
						$html .= '<div class="conf alert alert-success">'.$this->l('News Edited Successflly').'</div>';
					}
					elseif(Tools::isSubmit('deleted'.$this->name))
					{
						$html .= '<div class="conf error">'.$this->l('News Deleted').'</div>';
					}

				return $html.$helper->generateForm($this->fields_form);


			}	
			else
			{
				//$this->myList();
				$helper = $this->myList();
				return $helper->generateList(newsBlock::getDetail(), $this->fields_list);
			}

		
			
		}

		public function _postProcess()
		{
					$this->context->controller->getLanguages();
					$id_news = (int)Tools::getValue('id_news');
					$newz_tit = Tools::getValue('title');
					$newz_det = Tools::getValue('detail');
					
					//echo "Add- ".(int)$id_news;exit;
										
					if (Tools::isSubmit('save'.$this->name))
					{

					

						$id_news = newsBlock::insertTitle($id_news,$newz_tit);
					
						foreach ($this->context->controller->_languages as $language)
									newsBlock::insertLang($id_news,$language['id_lang']);

					Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&added'.$this->name);
					}
					elseif (Tools::isSubmit('edit'.$this->name)) 
					{
				
						//	echo "Edit- ".(int)$id_news;exit;
							newsBlock::editRow($id_news,$newz_tit);

							foreach ($this->context->controller->_languages as $language)
							{
								$detail = Tools::getValue('detail_'.$language['id_lang']);
							//	echo $detail;exit; 
								newsBlock::editLangRow($id_news,$detail,$language['id_lang']);
							}


					Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&edited'.$this->name);
					}
									

				else if(Tools::isSubmit('delete'.$this->name))
					{
						$id_news = Tools::getValue('id_news');
						newsBlock::delRow($id_news);

					Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&deleted'.$this->name);
						
					}
			
		}

		//-----------Display Add/Edit Form------------------
		public function addForm()
		{
			$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

			$id_news = Tools::getValue('id_news');
			$this->fields_form[0]['form'] = array(
				'tinymce' => true,
				'legend' => array(
					'title' =>($id_news != 0)? $this->l('Edit News Block :'):$this->l('Add News Block :'),
				),
				'input' => array(
					array(
					'type' => 'text',
					'label' => $this->l('News Title :'),
					'name' => 'title',
					'desc' => $this->l('Please enter a title for the news.'),
					'required' => true
					),
					array(
						'type' => 'textarea',
						'label' => $this->l('News Detail :'),
						'lang' => true,
						'autoload_rte' => true,
						'name' => 'detail',
						'desc' => $this->l('You can enter Detail about the news here.'),
						'cols' => 50,
						'rows' => 20,
						'hint' => $this->l('Invalid characters:').' <>;=#{}'
					),
			

				),
				'submit' => array(
				'name' => 'submit'.$this->name,
				'title' => $this->l('Save'),
				'class' => 'button',
				'type' => 'submit'
			),

			);

			$helper = new HelperForm();
			$helper->module = $this;
			$helper->name_controller = 'fmmnewsslider';
			$helper->identifier =$this->identifier;
			$helper->token = Tools::getAdminTokenLite('AdminModules');
			$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

			foreach (Language::getLanguages(false) as $lang)
			$helper->languages[] = array(
				'id_lang' => $lang['id_lang'],
				'iso_code' => $lang['iso_code'],
				'name' => $lang['name'],
				'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
			);

			//$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'edit'.$this->name;
			$helper->default_form_language = $default_lang;
			$helper->allow_employee_form_lang = $default_lang;
			$helper->toolbar_scroll = true;
			$helper->title = $this->l('Add/Edit News.');
	

			if(!empty($id_news)) 
			{
			//echo "OK-Edit".$id_news;exit;
				$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'&edit'.$this->name.'&id_news='.$id_news;
				$helper->submit_action = 'edit'.$this->name;
				
			} else
			{
			//	echo "OK-Add";exit;
				$helper->submit_action = 'save'.$this->name;
				//$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name;

			}
			
			
			// Load default values for forms inputs
			$helper->fields_value['title'] = Configuration::get('title');//Configuration::get('MOD_CMS_READ_MORE_ID_CMS');
			$helper->fields_value['detail'] = Configuration::get('detail');//Configuration::get('MOD_CMS_READ_MORE_NB_CHARS');
				
			return $helper;

		}

	public function myList()
	{
			$this->fields_list = array(
				'id_news' => array(
					'align' => 'left',
					'title' => $this->l('Id'),
					'name' =>	'id_news',
					'width' => 120,
					'type' => 'text',
				),
				'title' => array(
					'align' => 'left',
					'title' => $this->l('News Title'),
					'width' => 150,
					'type' => 'text',
					'filter_key' => 'a!lastname',
					'name' => 'title'
				),
			);


			$helper = new HelperList();
			$helper->shopLinkType = '';
			$helper->simple_header = false;
			$helper->identifier = 'id_news';
			$helper->actions = array('edit', 'delete');
			$helper->show_toolbar = true;
			$helper->toolbar_btn['new'] =  array(
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&add'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Add New')
			);

			$helper->title = $this->displayName;
			$helper->table = $this->name;
			$helper->token = Tools::getAdminTokenLite('AdminModules');
			$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

			

			return $helper;
	}


	public function hookRightColumn($params)
	{
		$newsInfo = newsBlock::getDetail();
		$this->context->smarty->assign(array(
						'link_value'=> Configuration::get('PS_REWRITING_SETTINGS'),
						'newsInfos' => $newsInfo,
						'nNews' => count($newsInfo),
						'module_link' => $this->context->link->getModuleLink('fmmnewsslider', 'display')));
				
		return $this->display(__FILE__, 'fmmnewsslider.tpl');
	}

	public function hookLeftColumn($params)
	{
		return $this->hookRightColumn($params);
	}


}

 ?>
