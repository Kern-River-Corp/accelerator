<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves a botblock token and URLs for an image or audio clip that the user is 
 * tomatch. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetChallengeTokenRequestType.html
 *
 */
class GetChallengeTokenRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetChallengeTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
