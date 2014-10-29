<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type listing the possible roles an eBay user may have in regards to 
 * an eBay order. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TradingRoleCodeType.html
 *
 * @property string Buyer
 * @property string Seller
 * @property string CustomCode
 */
class TradingRoleCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TradingRoleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TradingRoleCodeType = new TradingRoleCodeType();

?>
