<?php
namespace ArbkomEKvW\Evangtermine\Controller;


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
 * EventcontainerController
 */
class EventcontainerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
	
	/**
	 * @var \ArbkomEKvW\Evangtermine\Domain\Repository\EventcontainerRepository
	 * @inject
	 */
	protected $eventcontainerRepository = NULL;
	
	/**
	 * query parameters array
	 * @var \ArbkomEKvW\Evangtermine\Domain\Model\EtKeys
	 */
	private $etKeysParams;
	
	/**
	 * @var \ArbkomEKvW\Evangtermine\Util\SettingsUtility
	 * @inject
	 */
	private $settingsUtility;

	/**
	 * action list
	 * - must collect all parameters (etKeys) from config-settings, session and request
	 * - retrieve XML data
	 * - hand it to view
	 *
	 * @return void
	 */
	public function listAction() {
		
		// set up fresh, clean container object for params
		$this->etKeysParams = $this->objectManager->get('\ArbkomEKvW\Evangtermine\Domain\Model\EtKeys');
		$this->etKeysParams->setAllowedKeys($this->settings['knownEtKeys']);
		
		$this->settingsUtility->fetchParamsFromConfig($this->settings, $this->etKeysParams);
		// $this->fetchParamsFromSession($this->etKeysParams);
		// $this->fetchParamsFromRequest($this->etKeysParams);
		
		// hand model data to the view
		$this->view->assign('gonzo', $this->etKeysParams);
	}

	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
		
	}
	
	
}