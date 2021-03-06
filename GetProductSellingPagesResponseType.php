<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * This type is deprecated as the call is no longer available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductSellingPagesResponseType.html
 *
 */
class GetProductSellingPagesResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $ProductSellingPagesData;

	/**
	 * @return string
	 */
	function getProductSellingPagesData()
	{
		return $this->ProductSellingPagesData;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductSellingPagesData($value)
	{
		$this->ProductSellingPagesData = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductSellingPagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductSellingPagesData' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
