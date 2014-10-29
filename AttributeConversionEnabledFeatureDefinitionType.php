<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the ID-based attribute conversion to custom Item Specifics. If the field 
 * is present, the corresponding feature applies to the category. The field is 
 * returned as an empty element (e.g., a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AttributeConversionEnabledFeatureDefinitionType.html
 *
 */
class AttributeConversionEnabledFeatureDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AttributeConversionEnabledFeatureDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
