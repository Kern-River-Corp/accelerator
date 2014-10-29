<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that indicates whether or not a nonprofit charity organization 
 * is registered with eBay Giving Works. See the <a 
 * href="http://pages.ebay.com/help/sell/nonprofit.html#certify">Certifying your 
 * organization with MissionFish</a> help topic for more information on registering 
 * with MissionFish and the benefits that come with being a registered eBay Giving 
 * Works organization. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddressTypeCodeType.html
 *
 * @property string Contact
 * @property string Registered
 * @property string CustomCode
 */
class AddressTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Contact = 'Contact';
	const CodeType_Registered = 'Registered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddressTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AddressTypeCodeType = new AddressTypeCodeType();

?>
