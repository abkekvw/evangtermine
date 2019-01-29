<?php
namespace ArbkomEKvW\Evangtermine\Domain\Repository;

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
class EventcontainerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository implements \TYPO3\CMS\Core\SingletonInterface {
	
	
	/**
	 * @var ArbkomEKvW\Evangtermine\Util\ExtConf
	 */
	private $extConf = NULL;
	
	/**
	 * @var ArbkomEKvW\Evangtermine\Util\HttpRequestInterface
	 */
	private $httpRequest;
	
	/**
	 * Url of xml script on remote server
	 *
	 * @var string
	 */
	protected $xmlSourceUrl = '';
	

	/**
     * @param \ArbkomEKvW\Evangtermine\Util\ExtConf
     */
	public function injectExtConf(\ArbkomEKvW\Evangtermine\Util\ExtConf $extConf) {
		$this->extConf = $extConf;
	}


	/**
     * @param \ArbkomEKvW\Evangtermine\Util\HttpRequestInterface
     */
	public function injectHttpRequest(\ArbkomEKvW\Evangtermine\Util\HttpRequestInterface $httpRequest) {
		$this->httpRequest = $httpRequest;
	}


	/**
	 * returns xml Source Url
	 * 
	 * @return string
	 */
	public function getXmlSourceUrl() {
		
		if ($this->xmlSourceUrl === '') {
			$this->xmlSourceUrl = 'http://' . $this->extConf->getExtConfArray()['host'] . '/' . $this->extConf->getExtConfArray()['mode'];
		}
		return $this->xmlSourceUrl;
	}

	
	/**
	 * Main method for looking up events.
	 * 
	 * @param \ArbkomEKvW\Evangtermine\Domain\Model\EtKeys $etKeys
	 * @return \ArbkomEKvW\Evangtermine\Domain\Model\EventcontainerInterface
	 */
	public function findByEtKeys(\ArbkomEKvW\Evangtermine\Domain\Model\EtKeys $etKeys) {
		 
		// URL zusammenbauen: SourceURL plus $etKeys->getValue
		$query = ($etKeys->getValue()) ? '?' . $etKeys->getValue() : ''; 
		$url = $this->getXmlSourceUrl() . $query;
		
		// URL abfragen
		$rawXml = $this->httpRequest->fetchUrl($url);
		
		// XML im Eventcontainer wandeln
		$result = $this->objectManager->get('ArbkomEKvW\Evangtermine\Domain\Model\EventcontainerInterface');
		$result->loadXML($rawXml);
		
		return $result;
	}
	
	
}