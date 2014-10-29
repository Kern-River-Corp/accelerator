<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * HitCounterCodeType - Type declaration to be used by other schema.Indicates 
 * whether a hit counter is used for the item's listing pageand, if so, what type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HitCounterCodeType.html
 *
 * @property string NoHitCounter
 * @property string HonestyStyle
 * @property string GreenLED
 * @property string Hidden
 * @property string BasicStyle
 * @property string RetroStyle
 * @property string HiddenStyle
 * @property string CustomCode
 */
class HitCounterCodeType extends EbatNs_FacetType
{
	const CodeType_NoHitCounter = 'NoHitCounter';
	const CodeType_HonestyStyle = 'HonestyStyle';
	const CodeType_GreenLED = 'GreenLED';
	const CodeType_Hidden = 'Hidden';
	const CodeType_BasicStyle = 'BasicStyle';
	const CodeType_RetroStyle = 'RetroStyle';
	const CodeType_HiddenStyle = 'HiddenStyle';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HitCounterCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_HitCounterCodeType = new HitCounterCodeType();

?>
