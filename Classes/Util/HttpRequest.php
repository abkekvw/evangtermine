<?php
namespace ArbkomEKvW\Evangtermine\Util;

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
 * Class HttpRequest
 */
class HttpRequest implements HttpRequestInterface {
	
	/**
	 * This is curl or fopen
	 * @var string
	 */
	private $fetchTool;
	
	/**
	 * determine if we use curl or fopen
	 */
	public function __construct() {
		$this->fetchTool = (function_exists('curl_init')) ? 'curl' : 'fopen';
	}
	
	/* (non-PHPdoc)
	 * @see \ArbkomEKvW\Evangtermine\Util\HttpRequestInterface::fetchUrl()
	 */
	public function fetchUrl($url, $mode = '') {
		
		$content = '';
		$this->fetchTool = ($mode) ? $mode : $this->fetchTool;
		
		switch ($this->fetchTool) {
			
			case 'curl' :
				$content = $this->curlFetch($url);
			break;
			
			case 'fopen' :
				$content = $this->fopenFetch($url);
			break;
		}
		
		return $content;
	}
	
	/**
	 * fetch via curl
	 * @param unknown $url
	 */
	private function curlFetch($url) {
		
		$sobl = curl_init($url);
		
		curl_setopt($sobl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($sobl, CURLOPT_USERAGENT, 'tx_evangtermine');
		curl_setopt($sobl, CURLOPT_CONNECTTIMEOUT, 4);
		
		$pageContent = curl_exec($sobl);
		return $pageContent;
	}
	
	/**
	 * fetch via fopen
	 * @param unknown $url
	 */
	private function fopenFetch($url) {
		
		$pageContent = '';
		
		$fd = fopen($url, "r");
		if ($fd) {
			while (!feof($fd)) {
				$pageContent .= fgets($fd, 4096);
			}
			fclose($fd);
		} 
		
		return $pageContent;
	}

}