<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type listing the possible values that can be returned in the <strong> 
 * RefundingSourceType</strong> field. The return value indicates the source of the 
 * refund. <br/><br/> Currently, this type is not applicable as the introduction of 
 * the new eBay payment process for the Germany and Austria eBay sites has been 
 * delayed until further notice. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundingSourceTypeCodeType.html
 *
 * @property string ScheduledPayout
 * @property string Paypal
 * @property string BankAccount
 * @property string CustomCode
 */
class RefundingSourceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ScheduledPayout = 'ScheduledPayout';
	const CodeType_Paypal = 'Paypal';
	const CodeType_BankAccount = 'BankAccount';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundingSourceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundingSourceTypeCodeType = new RefundingSourceTypeCodeType();

?>
