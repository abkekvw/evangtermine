<?php
namespace ArbkomEKvW\Evangtermine\ViewHelpers;

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

 class EtpagerViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper {
 	
 	/**
 	 * The Controller associated to this widget.
 	 *
 	 * @var \ArbkomEKvW\Evangtermine\Controller\EtpagerController
 	 */
 	protected $controller;

    // this is new in TYPO3 8.x
    protected $escapeOutput = FALSE;

    
    /**
     * @param \ArbkomEKvW\Evangtermine\Controller\EtpagerController
     */
    public function injectController(\ArbkomEKvW\Evangtermine\Controller\EtpagerController $controller) {
    	$this->controller = $controller;
    }
 	

 	public function initializeArguments() {
 		$this->registerArgument('totalItems', 'string', 'amount of all items in result', TRUE);
 		$this->registerArgument('itemsPerPage', 'string', 'amount of items displayed on a single page', TRUE);
 		$this->registerArgument('currentPage', 'string', 'number of current page (pageID)', TRUE);
 	}
 	
 	public function render() {
 		return $this->initiateSubRequest();
 	}
 	
 }