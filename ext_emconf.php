<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_container".
 *
 * Auto generated 15-9-2022 22:10
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY]  = [
  	'title' 			=> 'T3UP - Container',
  	'description' 		=> 'T3UP for EXT:container',
	'category' 			=> 'templates',
	'author' 			=> 'Michael Lang',
  	'author_email' 		=> 'michael.lang@h-da.de',
    'version'           => '1.0.0',
  	'author_company' 	=> 'h_da',
  	'state' 			=> 'stable',
    'uploadfolder'    	=> false,
    'createDirs'       	=> '',
    'clearCacheOnLoad' 	=> true,
    'constraints'      	=> [
        'depends'   => [
            'typo3'          => '10.4.0-11.5.99',
            'container'		 =>	'2.0.0-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
