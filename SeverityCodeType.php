<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SeverityCodeType - Type declaration to be used by other schema.This code 
 * identifies the severity of an API error. A code indicateswhether there is an 
 * API-level error or warning that needs to becommunicated to the client. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SeverityCodeType.html
 *
 * @property string Warning
 * @property string Error
 * @property string CustomCode
 */
class SeverityCodeType extends EbatNs_FacetType
{
	const CodeType_Warning = 'Warning';
	const CodeType_Error = 'Error';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SeverityCodeType = new SeverityCodeType();

?>
