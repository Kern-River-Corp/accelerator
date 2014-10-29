<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Set of available layouts for items listed in an eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreItemListLayoutCodeType.html
 *
 * @property string ListView
 * @property string GalleryView
 * @property string CustomCode
 */
class StoreItemListLayoutCodeType extends EbatNs_FacetType
{
	const CodeType_ListView = 'ListView';
	const CodeType_GalleryView = 'GalleryView';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreItemListLayoutCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreItemListLayoutCodeType = new StoreItemListLayoutCodeType();

?>
