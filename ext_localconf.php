<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ArbkomEKvW.' . $_EXTKEY,
	'Evtermplugin',
	array(
		'Eventcontainer' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Eventcontainer' => 'list, show',
		
	)
);