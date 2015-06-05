<?php

namespace ArbkomEKvW\Evangtermine\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * *************************************************************
 *
 * Copyright notice
 *
 * (c) 2015 Christoph Roth <christoph.roth@lka.ekvw.de>, Evangelische Kirche von Westfalen
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 * *************************************************************
 */

/**
 * EventcontainerRepository
 */
class EventcontainerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
	
	/**
	 * Ext Conf data from ext_conf_template.txt
	 * @var array
	 */
	private $extConf;
	
	/**
	 * Url of xml script on remote server
	 *
	 * @var string
	 */
	protected $xmlSourceUrl = '';
	
	
	public function __construct(\TYPO3\CMS\Extbase\Object\ObjectManagerInterface $objectManager) {
		parent::__construct($objectManager);
		
		$this->extConf = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('\ArbkomEKvW\Evangtermine\Util\ExtConf')->getExtConfArray();
	}
	
	/**
	 * returns xml Source Url
	 * 
	 * @return string
	 */
	public function getXmlSourceUrl() {
		if ($this->xmlSourceUrl === '') {
			// fetch selected XML Source Url and save it in $xmlSourceUrl
			$this->xmlSourceUrl = 'http://' . $this->extConf['host'] . '/' . $this->extConf['mode'];
		}
		
		return $this->xmlSourceUrl;
	}
}