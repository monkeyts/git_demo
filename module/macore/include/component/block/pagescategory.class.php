<?php

defined('PHPFOX') or exit('NO DICE!');

class Macore_Component_Block_Pagescategory extends Phpfox_Component
{

	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
		if (defined('PHPFOX_IS_USER_PROFILE'))
		{
			return false;
		}
		
		$iCategoryId = $this->getParam('iCategory', 0);
		
		$aCategories = Phpfox::getService('pages.category')->getForBrowse($iCategoryId);
		
		if (!is_array($aCategories))
		{
			return false;
		}
		
		if (!count($aCategories))
		{
			return false;
		}	
		
		if (($sView = Phpfox::getLib('request')->get('view')))
		{
			foreach ($aCategories as $iKey => $aCategory)
			{
				$aCategories[$iKey]['link'] = $aCategory['link'] . 'view_' . $sView . '/';
			}
		}
		
		$this->template()->assign(array(
			'aCategories' => $aCategories
			)
		);
		
		return 'block';
	}
	
	/**
	 * Garbage collector. Is executed after this class has completed
	 * its job and the template has also been displayed.
	 */
	public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('pages.component_block_category_clean')) ? eval($sPlugin) : false);
	}
}

?>