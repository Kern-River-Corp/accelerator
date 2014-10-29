<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'ListingStatusCodeType.php';
require_once 'OfferArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * This type is deprecated as the call is no longer available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetHighBiddersResponseType.html
 *
 */
class GetHighBiddersResponseType extends AbstractResponseType
{
	/**
	 * @var OfferArrayType
	 */
	protected $BidArray;
	/**
	 * @var ListingStatusCodeType
	 */
	protected $ListingStatus;

	/**
	 * @return OfferArrayType
	 */
	function getBidArray()
	{
		return $this->BidArray;
	}
	/**
	 * @return void
	 * @param OfferArrayType $value 
	 */
	function setBidArray($value)
	{
		$this->BidArray = $value;
	}
	/**
	 * @return ListingStatusCodeType
	 */
	function getListingStatus()
	{
		return $this->ListingStatus;
	}
	/**
	 * @return void
	 * @param ListingStatusCodeType $value 
	 */
	function setListingStatus($value)
	{
		$this->ListingStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetHighBiddersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidArray' =>
					array(
						'required' => false,
						'type' => 'OfferArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingStatus' =>
					array(
						'required' => false,
						'type' => 'ListingStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
