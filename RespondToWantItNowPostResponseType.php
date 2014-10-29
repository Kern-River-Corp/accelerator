<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Indicates the success or failure of the attempt to respond to a Want It Now 
 * post. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RespondToWantItNowPostResponseType.html
 *
 */
class RespondToWantItNowPostResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RespondToWantItNowPostResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
