<?php
namespace ArbkomEKvW\Evangtermine\Tests\Unit;

class AbkekvwTestCase extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	
	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;
	
	public function __construct() {
		parent::__construct();
		$this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('\TYPO3\CMS\Extbase\Object\ObjectManager');
	}
	
}