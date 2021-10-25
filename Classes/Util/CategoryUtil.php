<?php
namespace ArbkomEKvW\Evangtermine\Util;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Christoph Roth <christoph.roth@ekvw.de>, Evangelische Kirche von Westfalen
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

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use ArbkomEKvW\Evangtermine\Util\ExtConf;

/**
* class CategoryUtil
* Helper class for retrieving Categories and Target Groups
*/
class CategoryUtil
{
    
    private $host = '';

    /**
     * Constructor fetches name of foreign host for category retrieval 
     * 
     * @return void 
     */
    public function __construct()
    {
        $extconf = GeneralUtility::makeInstance(ExtConf::class);
        $this->host = $extconf->getExtConfArray()['host'];
    }

    /**
     * Get categories list from foreign host. Method used as itemsProcFunc in Flexform
     * 
     * @param array $configuration 
     * @return void 
     */
    public function getCategories(array &$configuration)
    {
        $url = 'https://' . $this->host . '/service/eventtypes.json';
        $rawCategories = $this->getUrlContent($url);

        $categories[] = ['Alle Kategorien', 'all'];

        foreach ($rawCategories as $item)
        {
            $categories[] = [ $item->name, $item->id ];
        }

        $configuration['items'] = $categories;
    }


    /**
     * Get groups list from foreign host. Method used as itemsProcFunc in Flexform
     * 
     * @param array $configuration 
     * @return void 
     */
    public function getGroups(array &$configuration)
    {
        $url = 'https://' . $this->host . '/service/people.json';
        $rawGroups = $this->getUrlContent($url);

        foreach ($rawGroups as $item)
        {
            $groups[] = [ $item->name, $item->id ];
        }

        $configuration['items'] = $groups;
    }


    /**
     * Get JSON String with categories or audience from URL.
     * 
     * @param string $url 
     * @return array Decoded JSON 
     * @throws Exception 
     */
    private function getUrlContent($url)
    {
        // URL abfragen, nur IPv4 Auflösung
		$streamContext = stream_context_create(array(
			'socket' => array('bindto' => '0:0') 
		));
        $contentString = file_get_contents($url, false, $streamContext);

        $contentArray = json_decode($contentString);
        if ($contentArray === null)
        {
            throw new \RuntimeException('No valid JSON in ' . $url);
        }

        return $contentArray;
    }

}