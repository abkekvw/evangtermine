<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionkey = 'evangtermine';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$extensionkey,
	'List',
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'list, show, teaser, genericinfo'
		
	),
	// non-cacheable actions
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'list, show, teaser, genericinfo'
		
	)
);
