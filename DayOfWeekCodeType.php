<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * DayOfWeekCodeType - Specifies the day of week. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DayOfWeekCodeType.html
 *
 * @property string Sunday
 * @property string Monday
 * @property string Tuesday
 * @property string Wednesday
 * @property string Thursday
 * @property string Friday
 * @property string Saturday
 * @property string CustomCode
 */
class DayOfWeekCodeType extends EbatNs_FacetType
{
	const CodeType_Sunday = 'Sunday';
	const CodeType_Monday = 'Monday';
	const CodeType_Tuesday = 'Tuesday';
	const CodeType_Wednesday = 'Wednesday';
	const CodeType_Thursday = 'Thursday';
	const CodeType_Friday = 'Friday';
	const CodeType_Saturday = 'Saturday';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DayOfWeekCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DayOfWeekCodeType = new DayOfWeekCodeType();

?>
