<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'XSLFileType.php';

/**
 * This type is deprecated as the call is no longer available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductFinderXSLResponseType.html
 *
 */
class GetProductFinderXSLResponseType extends AbstractResponseType
{
	/**
	 * @var XSLFileType
	 */
	protected $XSLFile;

	/**
	 * @return XSLFileType
	 * @param integer $index 
	 */
	function getXSLFile($index = null)
	{
		if ($index !== null) {
			return $this->XSLFile[$index];
		} else {
			return $this->XSLFile;
		}
	}
	/**
	 * @return void
	 * @param XSLFileType $value 
	 * @param  $index 
	 */
	function setXSLFile($value, $index = null)
	{
		if ($index !== null) {
			$this->XSLFile[$index] = $value;
		} else {
			$this->XSLFile = $value;
		}
	}
	/**
	 * @return void
	 * @param XSLFileType $value 
	 */
	function addXSLFile($value)
	{
		$this->XSLFile[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductFinderXSLResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'XSLFile' =>
					array(
						'required' => false,
						'type' => 'XSLFileType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
