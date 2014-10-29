<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the European Article Number (EAN) feature, and whether 
 * thisfeature is enabled at the site level. An empty EANIdentifierEnabled field 
 * isreturned under the FeatureDefinitions container in GetCategoryFeatures if the 
 * featureis applicable to the site and if EANIdentifierEnabled is passed in as 
 * aFeatureID (or if no FeatureID is passed in, hence all features are returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EANIdentifierEnabledDefinitionType.html
 *
 */
class EANIdentifierEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EANIdentifierEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
