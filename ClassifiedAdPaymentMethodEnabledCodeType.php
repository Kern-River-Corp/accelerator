<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether the payment method will be displayed for a category 
 * belonging to the Lead Generation Format. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ClassifiedAdPaymentMethodEnabledCodeType.html
 *
 * @property string EnabledWithCheckout
 * @property string EnabledWithoutCheckout
 * @property string NotSupported
 * @property string CustomCode
 */
class ClassifiedAdPaymentMethodEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_EnabledWithCheckout = 'EnabledWithCheckout';
	const CodeType_EnabledWithoutCheckout = 'EnabledWithoutCheckout';
	const CodeType_NotSupported = 'NotSupported';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ClassifiedAdPaymentMethodEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ClassifiedAdPaymentMethodEnabledCodeType = new ClassifiedAdPaymentMethodEnabledCodeType();

?>
