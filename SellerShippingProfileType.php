<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>SellerShippingProfile</b> container, which is used in an 
 * Add/Revise/Relist Trading API call to reference a Business Policies shipping 
 * policy profile.Business Policies shipping profiles contain detailed information 
 * on domestic andinternational shipping, including shipping service options, 
 * handling time, packagehandling costs, excluded ship-to locations, and shipping 
 * insurance information.<br/><br/>Business Policies shipping profiles are also 
 * returned in <b>GetItem</b>, <b>GetMyeBaySelling<b>, and other Trading calls that 
 * retrieve Item data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerShippingProfileType.html
 *
 */
class SellerShippingProfileType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $ShippingProfileID;
	/**
	 * @var string
	 */
	protected $ShippingProfileName;

	/**
	 * @return long
	 */
	function getShippingProfileID()
	{
		return $this->ShippingProfileID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setShippingProfileID($value)
	{
		$this->ShippingProfileID = $value;
	}
	/**
	 * @return string
	 */
	function getShippingProfileName()
	{
		return $this->ShippingProfileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingProfileName($value)
	{
		$this->ShippingProfileName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerShippingProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingProfileID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingProfileName' =>
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
