<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'BidGroupType.php';

/**
 * This type is deprecated as the Bid Assistant feature is no longer available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidGroupArrayType.html
 *
 */
class BidGroupArrayType extends EbatNs_ComplexType
{
	/**
	 * @var BidGroupType
	 */
	protected $BidGroup;

	/**
	 * @return BidGroupType
	 * @param integer $index 
	 */
	function getBidGroup($index = null)
	{
		if ($index !== null) {
			return $this->BidGroup[$index];
		} else {
			return $this->BidGroup;
		}
	}
	/**
	 * @return void
	 * @param BidGroupType $value 
	 * @param  $index 
	 */
	function setBidGroup($value, $index = null)
	{
		if ($index !== null) {
			$this->BidGroup[$index] = $value;
		} else {
			$this->BidGroup = $value;
		}
	}
	/**
	 * @return void
	 * @param BidGroupType $value 
	 */
	function addBidGroup($value)
	{
		$this->BidGroup[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidGroupArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BidGroup' =>
					array(
						'required' => false,
						'type' => 'BidGroupType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
