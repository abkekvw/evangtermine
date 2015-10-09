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
	 * @var ArbkomEKvW\Evangtermine\Domain\Repository\EventcontainerRepository
	 * @inject
	 */
	protected $eventcontainerRepository = NULL;
	
	
	/**
	 * Uid value of current tt_content record
	 * serves as unique id of this plugin instance, used for session identification
	 * @var integer
	 */
	private $currentPluginUid;
	
	/**
	 * session data
	 * @var array
	 */
	private $session;
	
	/**
	 * @var ArbkomEKvW\Evangtermine\Util\SettingsUtility
	 * @inject
	 */
	private $settingsUtility;

	
	/**
	 * (non-PHPdoc)
	 * @see \TYPO3\CMS\Extbase\Mvc\Controller\ActionController::initializeAction()
	 */
	protected function initializeAction() {
		
		$this->currentPluginUid = $this->configurationManager->getContentObject()->data['uid'];
		
		$this->session = $this->loadSession();
		
		// include CSS and JS
		$this->includeAdditionalHeaderData();
		
	}
	
	
	/**
	 * load session data
	 * @return mixed
	 */
	private function loadSession() {
		
		if (!$this->currentPluginUid) {
			$this->currentPluginUid = $this->configurationManager->getContentObject()->data['uid'];
		}
		
		// load session, but only for this single plugin instance
		$sessionKey = 'tx_evangtermine' . $this->currentPluginUid;
		$sessionData = $GLOBALS['TSFE']->fe_user->getKey('ses', $sessionKey);
		
		return $sessionData;
		
	}
	
	/**
	 * save session data
	 */
	private function saveSession() {
		
		if (!$this->currentPluginUid) {
			$this->currentPluginUid = $this->configurationManager->getContentObject()->data['uid'];
		}
		
		$sessionKey = 'tx_evangtermine' . $this->currentPluginUid;
		$GLOBALS['TSFE']->fe_user->setKey('ses', $sessionKey, $this->session);
		$GLOBALS['TSFE']->fe_user->storeSessionData();
	}
	
	/**
	 * include CSS and JS resources 
	 */
	private function includeAdditionalHeaderData() {
		
		$additHDD = '';
		$siteRelPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('evangtermine');
		
		if ($this->settings['jQueryUICSS']) {
			$additHDD .=
			'<link rel="stylesheet" href="'. $siteRelPath . $this->settings['jQueryUICSS'] . '" media="all" />'."\n";
		}
		
		if ($this->settings['CSSFile']) {
			$additHDD .=
			'<link rel="stylesheet" href="'. $siteRelPath . $this->settings['CSSFile'] . '" media="all" />'."\n";
		}
		
		if ($this->settings['jQuery']) {
			$additHDD .= '<script type="text/javascript" src="' . $siteRelPath .  $this->settings['jQuery'] . '"></script>'."\n"; 
		}
		
		if ($this->settings['jQueryUI']) {
			$additHDD .= '<script type="text/javascript" src="' . $siteRelPath .  $this->settings['jQueryUI'] . '"></script>'."\n";
		}
		
		if ($this->settings['customJS']) {
			$additHDD .= '<script type="text/javascript" src="' . $siteRelPath .  $this->settings['customJS'] . '"></script>'."\n";
		}
		
		$GLOBALS['TSFE']->additionalHeaderData['tx_evangtermine'] = $additHDD;
	}
	
	
	/**
	 * create new Etkeys object and load Settings
	 * @return \ArbkomEKvW\Evangtermine\Domain\Model\EtKeys $etkeys
	 */
	private function getNewFromSettings() {
		
		$etkeys = $this->objectManager->get('ArbkomEKvW\Evangtermine\Domain\Model\EtKeys');
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
			
		// retrieve XML
		$evntContainer = $this->eventcontainerRepository->findByEtKeys($this->session['etkeys']);
		
		// fine tune and save parameters to session
		if ($this->session['etkeys']->getQ() == 'none') {
			$this->session['etkeys']->setQ('');
		}
		$this->saveSession();
		
		// hand model data to the view
		$this->view->assign('events', $evntContainer);
		$this->view->assign('etkeys', $this->session['etkeys']);
		
		// Debugging only
		// $this->view->assign('request', $this->request->getArguments()); 
	}
	
	
	/**
	 * action teaser 
	 * @return void
	 */
	public function teaserAction() {
		
		// teaser needs no session, just params from the settings array
		$etkeysTs = $this->getNewFromSettings();
		
		// retrieve XML
		$evntContainer = $this->eventcontainerRepository->findByEtKeys($etkeysTs);
		
		// hand model data to the view
		$this->view->assign('events', $evntContainer);
		
		
	}

	
	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
		
		$etkeys = $this->objectManager->get('ArbkomEKvW\Evangtermine\Domain\Model\EtKeys');
		$extconf = $this->objectManager->get('ArbkomEKvW\Evangtermine\Util\ExtConf');
		
		if (isset($this->request->getArguments()['ID'])) {
			
			$etkeys->setID($this->request->getArguments()['ID']);
			
			// retrieve XML
			$evntContainer = $this->eventcontainerRepository->findByEtKeys($etkeys);
			
			// hand model data to the view
			$this->view->assign('event', $evntContainer->getItems()[0]);
			$this->view->assign('detailitems', $evntContainer->getDetail());
			$this->view->assign('eventhost', $extconf->getExtConfArray()['host']);
			
		} else {
			$this->addFlashMessage('Keine Event-ID übergeben', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
			$this->redirect('genericinfo');
		}
		
	}
	
	/**
	 * action genericinfo
	 */
	public function genericinfoAction() {
	}
	
	
}