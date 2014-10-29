<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'ErrorHandlingCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'DetailLevelCodeType.php';
require_once 'WarningLevelCodeType.php';
require_once 'UUIDType.php';
require_once 'BotBlockRequestType.php';

/**
 * Base type definition of the request payload, which can carry any type of 
 * payload content plus optional versioning information and detail level 
 * requirements. All concrete request types (e.g., AddItemRequestType) are derived 
 * from the abstractrequest type. The naming convention we use for the concrete 
 * type names is the name of the service (the verb or call name) followed by 
 * "RequestType":VerbNameRequestType 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AbstractRequestType.html
 *
 */
class AbstractRequestType extends EbatNs_ComplexType
{
	/**
	 * @var DetailLevelCodeType
	 */
	protected $DetailLevel;
	/**
	 * @var string
	 */
	protected $ErrorLanguage;
	/**
	 * @var string
	 */
	protected $MessageID;
	/**
	 * @var string
	 */
	protected $Version;
	/**
	 * @var string
	 */
	protected $EndUserIP;
	/**
	 * @var ErrorHandlingCodeType
	 */
	protected $ErrorHandling;
	/**
	 * @var UUIDType
	 */
	protected $InvocationID;
	/**
	 * @var string
	 */
	protected $OutputSelector;
	/**
	 * @var WarningLevelCodeType
	 */
	protected $WarningLevel;
	/**
	 * @var BotBlockRequestType
	 */
	protected $BotBlock;

	/**
	 * @return DetailLevelCodeType
	 * @param integer $index 
	 */
	function getDetailLevel($index = null)
	{
		if ($index !== null) {
			return $this->DetailLevel[$index];
		} else {
			return $this->DetailLevel;
		}
	}
	/**
	 * @return void
	 * @param DetailLevelCodeType $value 
	 * @param  $index 
	 */
	function setDetailLevel($value, $index = null)
	{
		if ($index !== null) {
			$this->DetailLevel[$index] = $value;
		} else {
			$this->DetailLevel = $value;
		}
	}
	/**
	 * @return void
	 * @param DetailLevelCodeType $value 
	 */
	function addDetailLevel($value)
	{
		$this->DetailLevel[] = $value;
	}
	/**
	 * @return string
	 */
	function getErrorLanguage()
	{
		return $this->ErrorLanguage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setErrorLanguage($value)
	{
		$this->ErrorLanguage = $value;
	}
	/**
	 * @return string
	 */
	function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}
	/**
	 * @return string
	 */
	function getVersion()
	{
		return $this->Version;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setVersion($value)
	{
		$this->Version = $value;
	}
	/**
	 * @return string
	 */
	function getEndUserIP()
	{
		return $this->EndUserIP;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEndUserIP($value)
	{
		$this->EndUserIP = $value;
	}
	/**
	 * @return ErrorHandlingCodeType
	 */
	function getErrorHandling()
	{
		return $this->ErrorHandling;
	}
	/**
	 * @return void
	 * @param ErrorHandlingCodeType $value 
	 */
	function setErrorHandling($value)
	{
		$this->ErrorHandling = $value;
	}
	/**
	 * @return UUIDType
	 */
	function getInvocationID()
	{
		return $this->InvocationID;
	}
	/**
	 * @return void
	 * @param UUIDType $value 
	 */
	function setInvocationID($value)
	{
		$this->InvocationID = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getOutputSelector($index = null)
	{
		if ($index !== null) {
			return $this->OutputSelector[$index];
		} else {
			return $this->OutputSelector;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setOutputSelector($value, $index = null)
	{
		if ($index !== null) {
			$this->OutputSelector[$index] = $value;
		} else {
			$this->OutputSelector = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addOutputSelector($value)
	{
		$this->OutputSelector[] = $value;
	}
	/**
	 * @return WarningLevelCodeType
	 */
	function getWarningLevel()
	{
		return $this->WarningLevel;
	}
	/**
	 * @return void
	 * @param WarningLevelCodeType $value 
	 */
	function setWarningLevel($value)
	{
		$this->WarningLevel = $value;
	}
	/**
	 * @return BotBlockRequestType
	 */
	function getBotBlock()
	{
		return $this->BotBlock;
	}
	/**
	 * @return void
	 * @param BotBlockRequestType $value 
	 */
	function setBotBlock($value)
	{
		$this->BotBlock = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AbstractRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DetailLevel' =>
					array(
						'required' => false,
						'type' => 'DetailLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ErrorLanguage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Version' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndUserIP' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ErrorHandling' =>
					array(
						'required' => false,
						'type' => 'ErrorHandlingCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InvocationID' =>
					array(
						'required' => false,
						'type' => 'UUIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OutputSelector' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'WarningLevel' =>
					array(
						'required' => false,
						'type' => 'WarningLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BotBlock' =>
					array(
						'required' => false,
						'type' => 'BotBlockRequestType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
