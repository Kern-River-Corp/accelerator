<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'PromotionMethodCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * <b>No longer recommended.</b> eBay Store Cross Promotions are nolonger supported 
 * in the Trading API. Retrieves all promotion rules associated with the specified 
 * item or store category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPromotionRulesRequestType.html
 *
 */
class GetPromotionRulesRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var long
	 */
	protected $StoreCategoryID;
	/**
	 * @var PromotionMethodCodeType
	 */
	protected $PromotionMethod;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return long
	 */
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}
	/**
	 * @return PromotionMethodCodeType
	 */
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
	/**
	 * @return void
	 * @param PromotionMethodCodeType $value 
	 */
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPromotionRulesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionMethod' =>
					array(
						'required' => false,
						'type' => 'PromotionMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
