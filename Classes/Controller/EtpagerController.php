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
 * EtpagerController
 */
class EtpagerController  {
	
	// pager bar size (number of page fields to click on)
	const pgrbSize = 5;
	
	// Steps between fields in self::pgrbSize
	const pgrbSteps = 4;
	
	// Steps from pagebar border to pagebar center 
	const pgrbBorderToCenter = 2;
	
	/**
	 * pager data for display in view
	 * @var array
	 */
	protected $pgr;
	
	public function indexAction() {
		
		// Number of Events in result
		if (is_object($this->widgetConfiguration['totalItems'])) {
			$totalItems = intval($this->widgetConfiguration['totalItems']->__toString());
		} else {
			$totalItems = intval($this->widgetConfiguration['totalItems']);
		}
		
		$itemsPerPage = intval($this->widgetConfiguration['itemsPerPage']);
		
		// Number of pages in pager
		$this->pgr['pages'] =  ceil( $totalItems / $itemsPerPage );
		
		// Current page
		$this->pgr['current'] = isset($this->widgetConfiguration['currentPage']) ? $this->widgetConfiguration['currentPage'] : 1;
		
		$this->getPagerBarLimits();
		$this->getBrowserTriggers();

		// make values for pager bar
		$this->pgr['pgrBarValues'] = array();
		for ($i = $this->pgr['pgrBarBegin']; $i <= $this->pgr['pgrBarEnd']; $i++) {
			$this->pgr['pgrBarValues'][] = $i;
		}
		
		$this->view->assign('pgr', $this->pgr);
	}
	
	
	private function getPagerBarLimits() {
		
		// current page is near end of pagelist
		if ( ($this->pgr['pages'] - self::pgrbSize) < $this->pgr['current']) {
			
			$this->pgr['pgrBarEnd'] = $this->pgr['pages']; 
		
		// current page is near beginning of pagelist
		} elseif ( ($this->pgr['current'] + self::pgrbBorderToCenter) <= self::pgrbSize) {
			
			$this->pgr['pgrBarEnd'] = self::pgrbSize;
			
		// current page is somewhere in the middle 
		} else {
			$this->pgr['pgrBarEnd'] = $this->pgr['current'] + self::pgrbBorderToCenter;
		}
		
		// now the begin limit 
		if ( ($this->pgr['pgrBarEnd'] - self::pgrbSteps) <= 1) {
			$this->pgr['pgrBarBegin'] = 1;
		} else {
			$this->pgr['pgrBarBegin'] = $this->pgr['pgrBarEnd'] - self::pgrbSteps;
		}
	}
	
	
	private function getBrowserTriggers() {
		
		if ($this->pgr['pgrBarBegin'] >= self::pgrbBorderToCenter) {
			$this->pgr['lBrowser'] = 1;
			$this->pgr['lBrowserNext'] = ($this->pgr['current'] > 1) ? $this->pgr['current'] - 1 : 1;
		} else {
			$this->pgr['lBrowser'] = 0;
		}
		
		
		if ($this->pgr['current'] < $this->pgr['pgrBarEnd']) {
			$this->pgr['rBrowser'] = 1;
			$this->pgr['rBrowserNext'] = $this->pgr['current'] + 1; 
		} else {
			$this->pgr['rBrowser'] = 0;
		}
	}
	
	
}