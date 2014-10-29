<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PricingTreatmentCodeType.php';
require_once 'MinimumAdvertisedPriceExposureCodeType.php';
require_once 'AmountType.php';

/**
 * Using this container, a seller can supply original retail price anddiscount 
 * price for an item to clarify the discount treatment (also known as 
 * strike-through pricing). This only applies to fixed-price listings and auction 
 * listings with the Buy It Now option. This feature is available for large 
 * enterprise sellers via white list. A seller can provide discount treatment 
 * regardless of whether the listing includes a SKU. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DiscountPriceInfoType.html
 *
 */
class DiscountPriceInfoType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $OriginalRetailPrice;
	/**
	 * @var AmountType
	 */
	protected $MinimumAdvertisedPrice;
	/**
	 * @var MinimumAdvertisedPriceExposureCodeType
	 */
	protected $MinimumAdvertisedPriceExposure;
	/**
	 * @var PricingTreatmentCodeType
	 */
	protected $PricingTreatment;
	/**
	 * @var boolean
	 */
	protected $SoldOneBay;
	/**
	 * @var boolean
	 */
	protected $SoldOffeBay;
	/**
	 * @var AmountType
	 */
	protected $MadeForOutletComparisonPrice;

	/**
	 * @return AmountType
	 */
	function getOriginalRetailPrice()
	{
		return $this->OriginalRetailPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setOriginalRetailPrice($value)
	{
		$this->OriginalRetailPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMinimumAdvertisedPrice()
	{
		return $this->MinimumAdvertisedPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMinimumAdvertisedPrice($value)
	{
		$this->MinimumAdvertisedPrice = $value;
	}
	/**
	 * @return MinimumAdvertisedPriceExposureCodeType
	 */
	function getMinimumAdvertisedPriceExposure()
	{
		return $this->MinimumAdvertisedPriceExposure;
	}
	/**
	 * @return void
	 * @param MinimumAdvertisedPriceExposureCodeType $value 
	 */
	function setMinimumAdvertisedPriceExposure($value)
	{
		$this->MinimumAdvertisedPriceExposure = $value;
	}
	/**
	 * @return PricingTreatmentCodeType
	 */
	function getPricingTreatment()
	{
		return $this->PricingTreatment;
	}
	/**
	 * @return void
	 * @param PricingTreatmentCodeType $value 
	 */
	function setPricingTreatment($value)
	{
		$this->PricingTreatment = $value;
	}
	/**
	 * @return boolean
	 */
	function getSoldOneBay()
	{
		return $this->SoldOneBay;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSoldOneBay($value)
	{
		$this->SoldOneBay = $value;
	}
	/**
	 * @return boolean
	 */
	function getSoldOffeBay()
	{
		return $this->SoldOffeBay;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSoldOffeBay($value)
	{
		$this->SoldOffeBay = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMadeForOutletComparisonPrice()
	{
		return $this->MadeForOutletComparisonPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMadeForOutletComparisonPrice($value)
	{
		$this->MadeForOutletComparisonPrice = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DiscountPriceInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OriginalRetailPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumAdvertisedPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumAdvertisedPriceExposure' =>
					array(
						'required' => false,
						'type' => 'MinimumAdvertisedPriceExposureCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PricingTreatment' =>
					array(
						'required' => false,
						'type' => 'PricingTreatmentCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SoldOneBay' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SoldOffeBay' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MadeForOutletComparisonPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
