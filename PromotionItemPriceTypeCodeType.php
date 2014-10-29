<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type is deprecated as Cross Promotions are no longer supported in the APIs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionItemPriceTypeCodeType.html
 *
 * @property string AuctionPrice
 * @property string BuyItNowPrice
 * @property string BestOfferOnlyPrice
 * @property string ClassifiedAdPrice
 * @property string CustomCode
 */
class PromotionItemPriceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AuctionPrice = 'AuctionPrice';
	const CodeType_BuyItNowPrice = 'BuyItNowPrice';
	const CodeType_BestOfferOnlyPrice = 'BestOfferOnlyPrice';
	const CodeType_ClassifiedAdPrice = 'ClassifiedAdPrice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionItemPriceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionItemPriceTypeCodeType = new PromotionItemPriceTypeCodeType();

?>
