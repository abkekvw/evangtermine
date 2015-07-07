<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ArbkomEKvW.' . $_EXTKEY,
	'Evterm',
	array(
		'Eventcontainer' => 'list, show, genericinfo'
		
	),
	// non-cacheable actions
	array(
		'Eventcontainer' => 'list, show, genericinfo'
		
	)
);
