<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionkey = 'evangtermine';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$extensionkey,
	'List',
	'Evangelische Termine'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionkey, 'Configuration/TypoScript', 'Evangelische Termine');

// Activate Flexforms
$pluginSignature = 'evangtermine_list';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:evangtermine/Configuration/Flexforms/flexform_ds.xml');