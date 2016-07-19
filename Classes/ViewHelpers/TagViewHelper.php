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

/**
 * TagViewHelper puts value of 'node' into tag 'name' with optional 'class' attribute
 * if value of 'node' is empty, an empty string is returned
 * @author rothc
 *
 */
class TagViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    
    // this is new in TYPO3 8.x
    protected $escapeOutput = FALSE;

    public function initializeArguments() {
		$this->registerArgument('name', 'string', 'name of tag to generate', FALSE, 'span');
		$this->registerArgument('class', 'string', 'class name for tag', FALSE);
		$this->registerArgument('node', 'object', 'SimpleXMLElement object to generate tag for', TRUE);
	}
	
	/**
	 * 
	 * @return string
	 */
	public function render() {
		
		// If wrong object or object empty, return empty string
		if ( (get_class($this->arguments['node']) != 'SimpleXMLElement') || ($this->arguments['node'] == '') || ($this->arguments['node'] == FALSE) ) {
			return '';
		}
		
		// Prepare class attribute
		if ($this->arguments['class']) {
			$class = ' class="' . $this->arguments['class'] . '"';
		} else {
			$class = ' class="et' . $this->arguments['node']->getName() . '"';
		}
		
		// build tag
		$markup = sprintf('<%s%s>%s</%s>', $this->arguments['name'], $class, $this->arguments['node'], $this->arguments['name']);
		
		return $markup;
	}
}