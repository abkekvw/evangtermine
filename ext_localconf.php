<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$extensionkey = 'evangtermine';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$extensionkey,
	'List',
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'list, show, genericinfo'
	),
	// non-cacheable actions
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'list, show, genericinfo'
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$extensionkey,
	'Detail',
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'show, genericinfo'
	),
	// non-cacheable actions
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'genericinfo'
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$extensionkey,
	'Teaser',
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'teaser, show, genericinfo'
	),
	// non-cacheable actions
	array(
		ArbkomEKvW\Evangtermine\Controller\EventcontainerController::class => 'teaser, show, genericinfo'
	)
);


