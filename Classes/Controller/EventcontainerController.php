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
		
		// load session
		$this->session = $GLOBALS['TSFE']->fe_user->getKey('ses', 'tx_evangtermine');
		
		// include CSS and JS
		$this->includeAdditionalHeaderData();
		
	}
	
	/**
	 * save session data
	 */
	private function saveSession() {
		$GLOBALS['TSFE']->fe_user->setKey('ses', 'tx_evangtermine', $this->session);
		$GLOBALS['TSFE']->fe_user->storeSessionData();
	}
	
	/**
	 * include CSS and JS resources 
	 */
	private function includeAdditionalHeaderData() {
		
		if ($this->settings['CSSFile']) {
			$GLOBALS['TSFE']->additionalHeaderData['tx_evangtermine'] = 
				'<link rel="stylesheet" href="'.
				\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('evangtermine') . $this->settings['CSSFile'] .
				'" media="all" />';
		}
	}
	
	
	/**
	 * create new Etkeys object and load Settings
	 * @return \ArbkomEKvW\Evangtermine\Domain\Model\EtKeys $etkeys
	 */
	private function getNewFromSettings() {
		
		$etkeys = $this->objectManager->get('\ArbkomEKvW\Evangtermine\Domain\Model\EtKeys');
		$etkeys->setResetValues();
		
		$this->settingsUtility->fetchParamsFromSettings($this->settings, $etkeys);
		
		return $etkeys;
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
			// no session data exists. set up fresh container object for params and load settings
			$this->session['etkeys'] = $this->getNewFromSettings();
		}
		
		// collect params from request 
		$this->settingsUtility->fetchParamsFromRequest($this->request->getArguments(), $this->session['etkeys']);
		
		// check if params are coming in from (search-) form
		if (isset($this->request->getArguments()['etkeysForm'])) {
			
				// did user trigger form parameter reset?
				if (isset($this->request->getArguments()['sf_reset'])) {
					$this->session['etkeys'] = $this->getNewFromSettings(); // do reset
				} else {
					$this->settingsUtility->fetchParamsFromRequest($this->request->getArguments()['etkeysForm'], $this->session['etkeys']);
				}
		}
			
		// save parameters to session
		$this->saveSession();
		
		// retrieve XML
		$evntContainer = $this->eventcontainerRepository->findByEtKeys($this->session['etkeys']);
		
		// hand model data to the view
		$this->view->assign('events', $evntContainer);
		$this->view->assign('etkeys', $this->session['etkeys']);
		
		// Debugging only
		$this->view->assign('request', $this->request->getArguments()); 
	}

	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
		
	}
	
	
}