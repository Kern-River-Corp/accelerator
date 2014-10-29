<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'RequiredSellerActionCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the <b>RequiredSellerActionArray</b> container,which may 
 * contain one or more <b>RequiredSellerAction</b> fields. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RequiredSellerActionArrayType.html
 *
 */
class RequiredSellerActionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var RequiredSellerActionCodeType
	 */
	protected $RequiredSellerAction;

	/**
	 * @return RequiredSellerActionCodeType
	 * @param integer $index 
	 */
	function getRequiredSellerAction($index = null)
	{
		if ($index !== null) {
			return $this->RequiredSellerAction[$index];
		} else {
			return $this->RequiredSellerAction;
		}
	}
	/**
	 * @return void
	 * @param RequiredSellerActionCodeType $value 
	 * @param  $index 
	 */
	function setRequiredSellerAction($value, $index = null)
	{
		if ($index !== null) {
			$this->RequiredSellerAction[$index] = $value;
		} else {
			$this->RequiredSellerAction = $value;
		}
	}
	/**
	 * @return void
	 * @param RequiredSellerActionCodeType $value 
	 */
	function addRequiredSellerAction($value)
	{
		$this->RequiredSellerAction[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RequiredSellerActionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RequiredSellerAction' =>
					array(
						'required' => false,
						'type' => 'RequiredSellerActionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
