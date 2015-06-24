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
	 * session data
	 * @var array
	 */
	private $session;
	
	/**
	 * @var \ArbkomEKvW\Evangtermine\Util\SettingsUtility
	 * @inject
	 */
	private $settingsUtility;

	
	/**
	 * (non-PHPdoc)
	 * @see \TYPO3\CMS\Extbase\Mvc\Controller\ActionController::initializeAction()
	 */
	protected function initializeAction() {
		$this->session = $GLOBALS['TSFE']->fe_user->getKey('ses', 'tx_evangtermine'); 
	}
	
	/**
	 * save session data
	 */
	private function saveSession() {
		$GLOBALS['TSFE']->fe_user->setKey('ses', 'tx_evangtermine', $this->session);
		$GLOBALS['TSFE']->fe_user->storeSessionData();
	}
	
	/**
	 * action list
	 * - must collect all parameters (etKeys) from config-settings, session and request
	 * - update session
	 * - retrieve XML data
	 * - hand it to view
	 *
	 * @return void
	 */
	public function listAction() {
		
		if (!isset($this->session['etkeys'])) {
			// no session data exists. set up fresh, clean container object for params
			$this->session['etkeys'] = $this->objectManager->get('\ArbkomEKvW\Evangtermine\Domain\Model\EtKeys');
			$this->session['etkeys']->setAllowedKeys($this->settings['knownEtKeys']);
			
			// initialize etkeys from settings
			$this->settingsUtility->fetchParamsFromConfig($this->settings, $this->session['etkeys']);
		}
		
		if (count($this->request->getArguments())) {
			// collect params from request 
			$this->settingsUtility->fetchParamsFromRequest($this->request->getArguments(), $this->session['etkeys']);
			
			// save parameters to session
			$this->saveSession();
		}
		
		// retrieve XML
		$evntContainer = $this->eventcontainerRepository->findByEtKeys($this->session['etkeys']);
		
		// hand model data to the view
		$this->view->assign('events', $evntContainer);
		$this->view->assign('etkeys', $this->session['etkeys']->getKeysArray());
		
	}

	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
		
	}
	
	
}