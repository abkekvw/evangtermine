<?php
namespace ArbkomEKvW\Evangtermine\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Christoph Roth <christoph.roth@lka.ekvw.de>, Evangelische Kirche von Westfalen
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * EtKeys: Collection of key-value-pairs for requesting events
 */
class EtKeys extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {
	
	/**
	 * array of allowed keys
	 * @var array
	 */
	private $allowedKeys = array(
			'vid',
			'region',
			'kk',
			'eventtype',
			'highlight',
			'people',
			'person',
			'place',
			'ipm',
			'cha',
			'itemsPerPage',
			'pageID',
			'q',
			'd',
			'month',
			'date',
			'year',
			'start',
			'end',
			'dest',
			'own',
			'menue1',
			'menue2',
			'zip'
			,'yesno1',
			'yesno2',
			'until',
			'encoding');
	
	
	private $keysArray = array();
	
	
	/**
	 * constructor. sets default values from the start
	 */
	public function __construct() {
		// parent::__construct();
		$this->setDefaultValues();
	}
	
	/**
	 * Set a single key-value pair
	 * @param string $key
	 * @param string $value
	 */
	public function setSingleKey($key, $value) {

		if (in_array($key, $this->allowedKeys)) {
			$this->keysArray[$key] = trim($value);
		}
	}
	
	/**
	 * return a single value
	 * @param string $key
	 */
	public function getSingleKey($key) {
		return (isset($this->keysArray[$key])) ? $this->keysArray[$key] : ''; 
	}
	
	/**
	 * return all keys
	 * @return array
	 */
	public function getKeysArray() {
		return $this->keysArray;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject::getValue()
	 */
	public function getValue() {
		
		if (!empty($this->keysArray)) {
			
			foreach ($this->keysArray as $key => $value) {
				$parBlocks[] = $key . '=' . urlencode(utf8_decode($value));
			}
			
			return implode('&', $parBlocks);
		} else {
			return '';
		}
		
	}
	
	/**
	 * set several default values, necessary in case of reset
	 * @return void
	 */
	public function setDefaultValues() {
		
		// delete all keys
		$this->keysArray = array();
		
		// set defualt values
		$this->setSingleKey('vid', 'all');
		$this->setSingleKey('region', 'all');
		$this->setSingleKey('eventtype', 'all');
		$this->setSingleKey('highlight', 'all');
		$this->setSingleKey('people', '0');
		$this->setSingleKey('pageID', '1');
		$this->setSingleKey('q', 'none');
		$this->setSingleKey('date', '');
	}
	
	// Simulate Getters and Setters
	public function __call($methodName, $arguments) {
		
		$mPrefix = substr($methodName, 0, 3); // This is 'get' or 'set'
		
		if (strlen($methodName) > 3) {
			
			$property = lcfirst(substr($methodName, 3));
			
			if (in_array($property, $this->allowedKeys)) {
				
				switch ($mPrefix) {
					
					case 'get':
						return $this->getSingleKey($property);
					break;
					
					case 'set':
						$this->setSingleKey($property, $arguments[0]);
						return;
					break;
				}
			}
		}
		
		throw new \TYPO3\CMS\Extbase\Persistence\Generic\Exception\UnsupportedMethodException(
				'The method ' . $methodName . ' does not exist on this object');
	}
	
	
}