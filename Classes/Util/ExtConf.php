<?php
namespace ArbkomEKvW\Evangtermine\Util;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2020 Christoph Roth <christoph.roth@lka.ekvw.de>, Evangelische Kirche von Westfalen
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

 use \TYPO3\CMS\Core\Utility\GeneralUtility;
 use \TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

/**
 * class ExtConf
 * Gives access to the configuration data in ext_conf_template.txt
 */
class ExtConf implements \TYPO3\CMS\Core\SingletonInterface {
	
	/**
	 * Unserialized extConf Data
	 * @var array
	 */
	private $extConfArray = null;
	
	/**
	 * constructor
	 */
	public function __construct() {
		$this->extConfArray = GeneralUtility::makeInstance(ExtensionConfiguration::class)->get('evangtermine');
	}
	
	/**
	 * returns extConf data array
	 * @return array
	 */
	public function getExtConfArray() {
		return $this->extConfArray;
	}
	
}