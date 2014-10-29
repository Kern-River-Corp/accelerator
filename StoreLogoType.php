<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Store logo. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreLogoType.html
 *
 */
class StoreLogoType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $LogoID;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var anyURI
	 */
	protected $URL;

	/**
	 * @return int
	 */
	function getLogoID()
	{
		return $this->LogoID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLogoID($value)
	{
		$this->LogoID = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return anyURI
	 */
	function getURL()
	{
		return $this->URL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setURL($value)
	{
		$this->URL = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreLogoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LogoID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'URL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
