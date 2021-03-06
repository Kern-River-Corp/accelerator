<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'MyMessagesAlertType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * This type is deprecated because <b>MyMessagesAlert*</b> are deprecated. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesAlertArrayType.html
 *
 */
class MyMessagesAlertArrayType extends EbatNs_ComplexType
{
	/**
	 * @var MyMessagesAlertType
	 */
	protected $Alert;

	/**
	 * @return MyMessagesAlertType
	 * @param integer $index 
	 */
	function getAlert($index = null)
	{
		if ($index !== null) {
			return $this->Alert[$index];
		} else {
			return $this->Alert;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesAlertType $value 
	 * @param  $index 
	 */
	function setAlert($value, $index = null)
	{
		if ($index !== null) {
			$this->Alert[$index] = $value;
		} else {
			$this->Alert = $value;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesAlertType $value 
	 */
	function addAlert($value)
	{
		$this->Alert[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesAlertArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Alert' =>
					array(
						'required' => false,
						'type' => 'MyMessagesAlertType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
