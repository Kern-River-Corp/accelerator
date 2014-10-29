<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * No longer recommended in general, although this call may still be used to 
 * determine whether a category is catalog-enabled. All other features of this call 
 * are no longer functional. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategory2CSRequestType.html
 *
 */
class GetCategory2CSRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $AttributeSystemVersion;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAttributeSystemVersion($value)
	{
		$this->AttributeSystemVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategory2CSRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AttributeSystemVersion' =>
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
