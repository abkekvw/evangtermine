<?php
namespace ArbkomEKvW\Evangtermine\Domain\Model;

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
 * Eventcontainer Interface
 */
interface EventcontainerInterface {

	/**
	 * returns number of items in container
	 *
	 * @return integer
	*/
	public function getNumberOfItems();
	
	/**
	 * sets the number of items in result
	 * @param integer $numItems
	 * @return void
	 */
	public function setNumberOfItems($numItems);
	
	/**
	 * returns items array
	 * @return array $items
	 */
	public function getItems();
	
	/**
	 * sets items array
	 *
	 * @param array $items
	 * @return void
	 */
	public function setItems(array $items);
	
	/**
	 * transform XML into array and load item attributes
	 * @param string $xmlString
	 * @return void
	 */
	public function loadXML($xmlString);
	
}