<?php
/***************************************************************
 * Welcome to my News block module.
 * This is a tutorial module.
 ***************************************************************
 */

class newsBlock extends ObjectModel
{
	public $id_news;

	public static $definition = array(
		'table' => 'my_news',
		'primary' => 'id_news',
		'multilang' => true,
		'fields' => array(
			'id_news' =>      array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'id_lang' =>      array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'tab_title' =>    array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 1000),
			'tab_detail' =>	  array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName')
		),
	);


//===============Creating News Tables=============================
		public static function createTable()
		{
			$sql = true;

			//---##--table for news title--##---
			$sql &= Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'my_news`(
				`id_news` int(10) unsigned NOT NULL auto_increment,
				`title` VARCHAR(1000) NOT NULL,
				PRIMARY KEY (`id_news`)
				) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8');

			return $sql;
		}

	//-----------Creating Tables--------------------------------------

	public function createLangTable()
		{
			$sql = true;

			//---##--table for languages and news detail--##---
			$sql &= Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'my_news_lang`(
				`id_news` int(10) unsigned NOT NULL,
				`id_lang` int(10) unsigned NOT NULL,
				`detail` LONGTEXT,
				PRIMARY KEY (`id_news`,`id_lang`)
				) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8');

			return $sql;
		}

		//------------Deleting Tables------------------------------
		public static function dropTables()
		{
			return (Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'my_news`') 
				AND Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'my_news_lang`'));
			return true;

		}

	//-------------####Add to Database#####---------------------------
		public function insertTitle($newsId,$newsTitle)
		{	
			while($newsTitle != null)
			{
				$sql = 'INSERT INTO `'._DB_PREFIX_.'my_news` (`id_news`, `title`)
					VALUES('.(int)$newsId.', "'.$newsTitle.'")';
			
					if (Db::getInstance()->executeS($sql))
				       return Db::getInstance()->Insert_ID();
			}
		}

			//-------------####Add to Database#####---------------------------
		public function insertLang($id_news,$langId)
		{	
			$det = Tools::getValue('detail_'.$langId, true);
			
			$sql = 'INSERT INTO `'._DB_PREFIX_.'my_news_lang` (`id_news`,`id_lang`, `detail`)
			VALUES('.(int)$id_news.','.$langId.', "'.pSQL($det,true).'")'; 	

//echo $sql; exit;

	return Db::getInstance()->execute($sql);



		}

		public function getDetail()
		{
			return Db::getInstance()->executeS(
			'SELECT *
			FROM `'._DB_PREFIX_.'my_news`');

		}


		public function displayLinkDetail()
		{
			$sql = Db::getInstance()->executeS( 'SELECT n.`id_news`, n.`title`, nl.`detail`, nl.`id_news`, nl.`id_lang`
			FROM `'._DB_PREFIX_.'my_news` n
			LEFT JOIN `'._DB_PREFIX_.'my_news_lang` nl 
			ON (n.`id_news` = nl.`id_news`)
			WHERE nl.`id_news` = n.`id_news`');


		//	echo "<pre>"; var_dump($sql);exit;

			return $sql;

		}

		//------------------Getting values from Database tables------------
		public function getmyVal($news_id,$id_lang)
		{
			
			$sql = 'SELECT n.`title`, nl.`detail`, nl.`id_lang`
			FROM `'._DB_PREFIX_.'my_news` n
			LEFT JOIN `'._DB_PREFIX_.'my_news_lang` nl 
			ON (n.`id_news` = nl.`id_news`)
			WHERE nl.`id_news` = '.(int)$news_id;

//echo $sql; exit;

			$News = Db::getInstance()->executeS($sql);

			if(is_array($News))	
			{	
				foreach($News as $myNews)
					$a = $result[(int)$myNews['id_lang']]['title'] = $myNews['title'];
			}	

			return $val = array($a,$News);

		
			}
	

		//-------------Delete a Row from List-----------------------
		public function delRow($id_news)
		{
			

			$sql = 'DELETE FROM `'._DB_PREFIX_.'my_news`
			WHERE `id_news` = '.(int)$id_news;

			Db::getInstance()->execute($sql);

		$sql = 'DELETE FROM `'._DB_PREFIX_.'my_news_lang`
			WHERE `id_news` = '.(int)$id_news;

			Db::getInstance()->execute($sql);



		}

		public function editRow($news_id,$news_tit)
		{
			$sql = 'UPDATE `'._DB_PREFIX_.'my_news`
			SET `title` = "'.pSQL($news_tit).'"
			WHERE `id_news` = '.(int)$news_id;
	//echo $sql; exit;
			Db::getInstance()->execute($sql);
		}

		public function editLangRow($news_id,$news_detl,$id_lang)
		{

			$sql = 'UPDATE `'._DB_PREFIX_.'my_news_lang`
			SET `detail` = "'.pSQL($news_detl,true).'"
			WHERE `id_news` = '.(int)$news_id.'
			AND `id_lang`= '.(int)$id_lang;

			Db::getInstance()->execute($sql);

		}

		//------------edit values--
		
}

