<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumeration type that contains the payout methods available to DE and AT sellers 
 * for orders going through thenew eBay payment process flow. Once a DE or AT 
 * seller has accepted the supplemental user agreement for the neweBay payment 
 * process, that seller must set the default payout account in My eBay preferences. 
 * eBay willdistribute seller payouts to this account.<br><br>Currently, this 
 * enumerated type is not applicable since the new eBay payment process on the 
 * German and Austrian sites has been put on hold indefinitely. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PayoutMethodType.html
 *
 * @property string PAYPAL
 * @property string EFT
 * @property string MONEYBOOKERS
 */
class PayoutMethodType extends EbatNs_FacetType
{
	const CodeType_PAYPAL = 'PAYPAL';
	const CodeType_EFT = 'EFT';
	const CodeType_MONEYBOOKERS = 'MONEYBOOKERS';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PayoutMethodType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PayoutMethodType = new PayoutMethodType();

?>
