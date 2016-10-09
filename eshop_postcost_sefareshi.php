<?php
/**
 * @version        1.0.0
 * @package        Joomla
 * @subpackage    EShop - Price Shipping
 * @author      SC-Team
 * @copyright    Copyright (C) 2012 Ossolution Team
 * @license        GNU/GPL, see LICENSE.php
 */
// no direct access
defined('_JEXEC') or die();
class eshop_postcost_sefareshi extends eshop_shipping
{
	public function __construct()
	{
		parent::setName('eshop_postcost_sefareshi');
		parent::__construct();
		require_once JPATH_COMPONENT . '/plugins/shipping/eshop_postcost_func.php'; // include Function post
        	require_once JPATH_COMPONENT . '/plugins/shipping/eshop_postcost_totalpost_func.php'; // include Function post

	}
    /**
     *
     * Constructor function
     */
    //function eshop_postcost_sefareshi(){
      //  parent::setName('eshop_postcost_sefareshi');
        //parent::eshop_shipping();
        //require_once JPATH_COMPONENT . '/plugins/shipping/eshop_postcost_func.php'; // include Function post
        //require_once JPATH_COMPONENT . '/plugins/shipping/eshop_postcost_totalpost_func.php'; // include Function post
    //}
    //===============================================================================================  
    /**
     * 
     * Function tet get quote for price shipping
     * @param array $addressData
     * @param object $params
     */
    function getQuote($addressData, $params)
    {
        //Check geozone condition
        $db          = JFactory::getDbo();
        $query       = $db->getQuery(true);
        $query2      = $db->getQuery(true);
        //====================  get weight===============================================
        $cart        = new EshopCart();
        $eshopWeight = new EshopWeight();
        $query2->select('weight_id')->from('#__eshop_weightdetails')->where('weight_unit = "g"');
        $db->setQuery($query2);
        $unitG      = $db->loadResult();
        $weightCart = intval($eshopWeight->convert($cart->getWeight(), EshopHelper::getConfigValue('weight_id'), $unitG));
        //========================= define addresses for source and destenition    
        // check user type    
        $user       = JFactory::getUser();
        $usrID      = $user->get('id');
        $groupId    = $user->getAuthorisedGroups();
        $curentUser = $groupId[1]; // get group id by current user
        //=================== get geo of source    
        $sourceZone = EshopHelper::getConfigValue('zone_id'); //outout is zone number
		if($sourceZone == 0 )
		{
			echo '<p></p>'.'<font color="red">'.JText::_('PLG_ESHOP_POSTCOST_SEFARESHI_ERROR2').'</font>'.'<p></p>';
		}
        //=================== get geo of dest
        if ($curentUser == 9) {
            // not registered
            $session  = JFactory::getSession();
            $DestZone = $session->get('shipping_zone_id'); //outout is zone number
        } else {
            // if registered
            $myQuery = "SELECT zone_id FROM #__eshop_addresses WHERE customer_id='$usrID'";
            $db->setQuery($myQuery);
            $registeredDestZone = $db->loadColumn();
            $DestZone           = $registeredDestZone[0]; //outout is zone number
        }
        //============= define variable
        //---------------------------------------------------// beyne shahri
        $weight250_BS   = $params->get('Sefareshi_250_BS');
        $weight500_BS   = $params->get('Sefareshi_500_BS');
        $weight1000_BS  = $params->get('Sefareshi_1000_BS');
        $weight2000_BS  = $params->get('Sefareshi_2000_BS');
        //---------------------------------------------------// ostani hamjavar
        $weight250_OS   = $params->get('Sefareshi_250_OS');
        $weight500_OS   = $params->get('Sefareshi_250_OS');
        $weight1000_OS  = $params->get('Sefareshi_250_OS');
        $weight2000_OS  = $params->get('Sefareshi_250_OS');
        //--------------------------------------------------- // ostani gheire hamjavar
        $weight250_OGH  = $params->get('Sefareshi_250_OGH');
        $weight500_OGH  = $params->get('Sefareshi_250_OGH');
        $weight1000_OGH = $params->get('Sefareshi_250_OGH');
        $weight2000_OGH = $params->get('Sefareshi_250_OGH');
        //--------------------------------------------------- // Plus
        $PLUS_BS = $params->get('SPlus_BS');
        $PLUS_OS = $params->get('SPlus_OS');
        $PLUS_OGH = $params->get('SPlus_OGH');
        //=========================================================
        if($weight250_BS == 0  or 
        $weight500_BS == 0 or 
        $weight1000_BS == 0 or 
        $weight2000_BS == 0 or 
        $weight250_OS == 0 or 
        $weight500_OS == 0 or 
        $weight1000_OS == 0 or 
        $weight2000_OS == 0 or 
        $weight250_OGH == 0 or 
        $weight500_OGH == 0 or 
        $weight1000_OGH == 0 or 
        $weight2000_OGH == 0)
		{
			echo '<p></p>'.'<font color="red">'.JText::_('PLG_ESHOP_POSTCOST_SEFARESHI_ERROR3').'</font>'.'<p></p>';
		}
        
        //============================================================================
        //=========================call function ==================================
        //----------- calculate postcost
        $outBeyneShahri = PostCostBS($weightCart, $weight250_BS, $weight500_BS, $weight1000_BS, $weight2000_BS,$PLUS_BS);
        $outOstaniHam   = PostCostOS($weightCart, $weight250_OS, $weight500_OS, $weight1000_OS, $weight2000_OS,$PLUS_OS);
        $outOstaniGHam  = PostCostOGH($weightCart, $weight250_OGH, $weight500_OGH, $weight1000_OGH, $weight2000_OGH,$PLUS_OGH);
        
        if (($outBeyneShahri == null) or  ($outOstaniHam == null ) or ($outOstaniGHam == null))
	       {
	        echo  '<p></p>'.'<font color="red">وزن محصول بیش از حد مجاز است</font>'.'<p></p>';
	       }
        //----------- calculate totalpost
        $out            = TotalPost($DestZone, $sourceZone, $outBeyneShahri, $outOstaniHam, $outOstaniGHam);
        //============================================================================
        $methodData     = array();
        $cost           = $out; // hazine shipping
        $query->clear();
        $query->select('*')->from('#__eshop_shippings')->where('name = "eshop_postcost_sefareshi"');
        $db->setQuery($query);
        $row  = $db->loadObject();
    
        $quoteData['price'] = array(
            'name' => 'eshop_postcost_sefareshi.price',
            'title' => '<p></p>'.JText::_('اطلاعات قیمت بر اساس پست سفارشی'), // name
            'cost' => $out,
            'text' => $out
        );
        $methodData         = array(
            'name' => 'eshop_postcost_sefareshi',
            'title' => '<p></p>'.JText::_('پست سفارشی'), // onvan
            'quote' => $quoteData,
            'ordering' => $row->ordering,
            'error' => false
        );
        //===========================================================================
    
      
        if ($out != 0)
        {
			 return $methodData;
		}
		else 
		{
			echo '<p></p>'.'<b><font color="red">'.JText::_('PLG_ESHOP_POSTCOST_SEFARESHI_ERROR').'</font></b>';
		}
		
        
        
        
       
    } // end function
}


