<?php
/**
 * @version         $Id:$
 * @package         Joomla
 * @subpackage  	rating plugin
 * @copyright       Copyright (C) 2013 Marvelic Engine Co.,Ltd..CMSPlugin.com http://marvelic.co.th All rights reserved.
 * @license         GNU General Public License version 3 or later
 * 
 * Marvelic Engine Co.,Ltd. is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

defined('JPATH_BASE') or die;

class plgContentRating extends JPlugin
{
	/**
         * Load the language file on instantiation.
         * Note this is only available in Joomla 3.1 and higher.
         * If you want to support 3.0 series you must override the constructor
         *
         * @var boolean
         * @since 3.1
         */
        protected $autoloadLanguage = true;

	function onContentPrepareForm($form, $data)
	{
		$app = JFactory::getApplication();
        $option = $app->input->get('option');
                
        if($option == "com_content" || $option == "com_mycontent" ){
                  
            JForm::addFormPath(__DIR__ . '/forms');
            //Show specific forms based on categories
            $form->loadFile('rating', false); 
                   
            return true;
        }
        return true;
	}
	
}
