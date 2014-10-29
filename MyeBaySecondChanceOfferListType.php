<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';

/**
 * A list of possible My eBay Second Chance Offers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyeBaySecondChanceOfferListType.html
 *
 */
class MyeBaySecondChanceOfferListType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $TotalAvailable;
	/**
	 * @var ItemType
	 */
	protected $SecondChanceOffer;

	/**
	 * @return int
	 */
	function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalAvailable($value)
	{
		$this->TotalAvailable = $value;
	}
	/**
	 * @return ItemType
	 * @param integer $index 
	 */
	function getSecondChanceOffer($index = null)
	{
		if ($index !== null) {
			return $this->SecondChanceOffer[$index];
		} else {
			return $this->SecondChanceOffer;
		}
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 * @param  $index 
	 */
	function setSecondChanceOffer($value, $index = null)
	{
		if ($index !== null) {
			$this->SecondChanceOffer[$index] = $value;
		} else {
			$this->SecondChanceOffer = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function addSecondChanceOffer($value)
	{
		$this->SecondChanceOffer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyeBaySecondChanceOfferListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TotalAvailable' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SecondChanceOffer' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
