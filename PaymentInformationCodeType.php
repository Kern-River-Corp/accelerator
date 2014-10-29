<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PaymentTransactionCodeType.php';

/**
 * Contains details payment information 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentInformationCodeType.html
 *
 */
class PaymentInformationCodeType extends EbatNs_ComplexType
{
	/**
	 * @var PaymentTransactionCodeType
	 */
	protected $Payment;

	/**
	 * @return PaymentTransactionCodeType
	 * @param integer $index 
	 */
	function getPayment($index = null)
	{
		if ($index !== null) {
			return $this->Payment[$index];
		} else {
			return $this->Payment;
		}
	}
	/**
	 * @return void
	 * @param PaymentTransactionCodeType $value 
	 * @param  $index 
	 */
	function setPayment($value, $index = null)
	{
		if ($index !== null) {
			$this->Payment[$index] = $value;
		} else {
			$this->Payment = $value;
		}
	}
	/**
	 * @return void
	 * @param PaymentTransactionCodeType $value 
	 */
	function addPayment($value)
	{
		$this->Payment[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentInformationCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Payment' =>
					array(
						'required' => false,
						'type' => 'PaymentTransactionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
