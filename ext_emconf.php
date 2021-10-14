<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "evangtermine"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Evangelische Termine',
	'description' => 'Anzeige des Terminkalenders der Vernetzten Kirche in der Ev.-Luth. Kirche in Bayern und weiteren teilnehmenden evangelischen Landeskirchen.',
	'category' => 'plugin',
	'author' => 'Christoph Roth',
	'author_email' => 'christoph.roth@ekvw.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '2.1.7',
	'constraints' => array(
		'depends' => array(
			'typo3' => '9.5.0-10.9.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'autoload' => [
   		'psr-4' => [
      		'ArbkomEKvW\\Evangtermine\\' => 'Classes'
   		]
	],
);