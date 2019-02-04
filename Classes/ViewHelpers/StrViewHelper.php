<?php
namespace ArbkomEKvW\Evangtermine\ViewHelpers;

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
 * StrViewHelper
 * In case {someObject} in a fluid template does not resolve to the object's string value this ViewHelper can be useful. 
 * SimpleXMLElement objects for example required this at time of writing (06/2015) 
 */
class StrViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper {
	
	public function initializeArguments() {
		$this->registerArgument ( 'on', 'object', 'Object for toString', TRUE );
	}
	
	/**
	 *
	 * @return string
	 */
	public function render() {
		return $this->arguments['on']->__toString();
	}
}