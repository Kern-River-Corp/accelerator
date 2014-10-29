<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumeration type that indicates the current status of an Unpaid Item case. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnpaidItemCaseStatusTypeCodeType.html
 *
 * @property string Open
 * @property string ClosedWithPayment
 * @property string ClosedWithoutPayment
 * @property string CustomCode
 */
class UnpaidItemCaseStatusTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Open = 'Open';
	const CodeType_ClosedWithPayment = 'ClosedWithPayment';
	const CodeType_ClosedWithoutPayment = 'ClosedWithoutPayment';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnpaidItemCaseStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UnpaidItemCaseStatusTypeCodeType = new UnpaidItemCaseStatusTypeCodeType();

?>
