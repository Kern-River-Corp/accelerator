<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type is deprecated because it is not used by any call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MailOptionsTypeCodeType.html
 *
 * @property string DoNotSendEmail
 * @property string EmailCopyToSender
 * @property string HideSenderEmailAddress
 * @property string CustomCode
 */
class MailOptionsTypeCodeType extends EbatNs_FacetType
{
	const CodeType_DoNotSendEmail = 'DoNotSendEmail';
	const CodeType_EmailCopyToSender = 'EmailCopyToSender';
	const CodeType_HideSenderEmailAddress = 'HideSenderEmailAddress';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MailOptionsTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MailOptionsTypeCodeType = new MailOptionsTypeCodeType();

?>
