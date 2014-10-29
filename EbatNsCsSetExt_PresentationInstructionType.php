<?php
// autogenerated file 05.05.2008 16:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_InitialType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_PresentationInstructionType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $DomainName;
	/**
	 * @var string
	 */
	protected $Day;
	/**
	 * @var string
	 */
	protected $Month;
	/**
	 * @var string
	 */
	protected $InitialValue;
	/**
	 * @var string
	 */
	protected $Glossary;
	/**
	 * @var string
	 */
	protected $Label;
	/**
	 * @var string
	 */
	protected $MessageBottom;
	/**
	 * @var string
	 */
	protected $NoJS;
	/**
	 * @var string
	 */
	protected $Year;
	/**
	 * @var string
	 */
	protected $YearInitialValue;
	/**
	 * @var string
	 */
	protected $Message;
	/**
	 * @var string
	 */
	protected $TextMessage;
	/**
	 * @var EbatNsCsSetExt_InitialType
	 */
	protected $Initial;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getDomainName($index = null)
	{
		if ($index !== null) {
			return $this->DomainName[$index];
		} else {
			return $this->DomainName;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setDomainName($value, $index = null)
	{
		if ($index !== null) {
			$this->DomainName[$index] = $value;
		} else {
			$this->DomainName = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addDomainName($value)
	{
		$this->DomainName[] = $value;
	}
	/**
	 * @return string
	 */
	function getDay()
	{
		return $this->Day;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDay($value)
	{
		$this->Day = $value;
	}
	/**
	 * @return string
	 */
	function getMonth()
	{
		return $this->Month;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMonth($value)
	{
		$this->Month = $value;
	}
	/**
	 * @return string
	 */
	function getInitialValue()
	{
		return $this->InitialValue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setInitialValue($value)
	{
		$this->InitialValue = $value;
	}
	/**
	 * @return string
	 */
	function getGlossary()
	{
		return $this->Glossary;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setGlossary($value)
	{
		$this->Glossary = $value;
	}
	/**
	 * @return string
	 */
	function getLabel()
	{
		return $this->Label;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLabel($value)
	{
		$this->Label = $value;
	}
	/**
	 * @return string
	 */
	function getMessageBottom()
	{
		return $this->MessageBottom;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageBottom($value)
	{
		$this->MessageBottom = $value;
	}
	/**
	 * @return string
	 */
	function getNoJS()
	{
		return $this->NoJS;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNoJS($value)
	{
		$this->NoJS = $value;
	}
	/**
	 * @return string
	 */
	function getYear()
	{
		return $this->Year;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setYear($value)
	{
		$this->Year = $value;
	}
	/**
	 * @return string
	 */
	function getYearInitialValue()
	{
		return $this->YearInitialValue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setYearInitialValue($value)
	{
		$this->YearInitialValue = $value;
	}
	/**
	 * @return string
	 */
	function getMessage()
	{
		return $this->Message;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessage($value)
	{
		$this->Message = $value;
	}
	/**
	 * @return string
	 */
	function getTextMessage()
	{
		return $this->TextMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTextMessage($value)
	{
		$this->TextMessage = $value;
	}
	/**
	 * @return EbatNsCsSetExt_InitialType
	 */
	function getInitial()
	{
		return $this->Initial;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_InitialType $value 
	 */
	function setInitial($value)
	{
		$this->Initial = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_PresentationInstructionType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'DomainName' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '1..*'
				),
				'Day' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Month' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'InitialValue' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Glossary' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Label' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MessageBottom' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'NoJS' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Year' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'YearInitialValue' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Message' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'TextMessage' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Initial' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_InitialType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'pageLocation' =>
			array(
				'name' => 'pageLocation',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
