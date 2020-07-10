<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$extensionkey = 'evangtermine';

if (strpos(TYPO3_branch, '9.') === FALSE) {

	// The TYPO3 10 way
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

} else {

	// The old way
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'ArbkomEKvW.' . $extensionkey,
		'List',
		array(
			'Eventcontainer' => 'list, show, teaser, genericinfo'
		),
		// non-cacheable actions
		array(
			'Eventcontainer' => 'list, show, teaser, genericinfo'
		)
	);

}
