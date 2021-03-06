<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserIdentityCodeType.html
 *
 * @property string eBayUser
 * @property string eBayPartner
 * @property string CustomCode
 */
class UserIdentityCodeType extends EbatNs_FacetType
{
	const CodeType_eBayUser = 'eBayUser';
	const CodeType_eBayPartner = 'eBayPartner';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserIdentityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UserIdentityCodeType = new UserIdentityCodeType();

?>
