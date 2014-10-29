<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'ProStoresDetailsType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * This type is deprecated because 3rd Party Checkout was deprecated. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProStoresCheckoutPreferenceType.html
 *
 */
class ProStoresCheckoutPreferenceType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $CheckoutRedirectProStores;
	/**
	 * @var ProStoresDetailsType
	 */
	protected $ProStoresDetails;

	/**
	 * @return boolean
	 */
	function getCheckoutRedirectProStores()
	{
		return $this->CheckoutRedirectProStores;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCheckoutRedirectProStores($value)
	{
		$this->CheckoutRedirectProStores = $value;
	}
	/**
	 * @return ProStoresDetailsType
	 */
	function getProStoresDetails()
	{
		return $this->ProStoresDetails;
	}
	/**
	 * @return void
	 * @param ProStoresDetailsType $value 
	 */
	function setProStoresDetails($value)
	{
		$this->ProStoresDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProStoresCheckoutPreferenceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CheckoutRedirectProStores' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProStoresDetails' =>
					array(
						'required' => false,
						'type' => 'ProStoresDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..0'
					)
				));
	}
}
?>
