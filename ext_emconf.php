<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_container".
 *
 * 15-02-2025
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY]  = [
  	'title' 		=> 'T3UP - Container',
  	'description' 		=> 'T3UP for EXT:container',
	'category' 		=> 'templates',
	'author' 		=> 'Michael Lang',
  	'author_email' 		=> 'michael.lang@h-da.de',
    	'version'           	=> '13.0.03',
  	'author_company' 	=> 'h_da',
  	'state' 		=> 'stable',
    	'uploadfolder'    	=> false,
   	'createDirs'       	=> '',
    	'clearCacheOnLoad' 	=> true,
    	'constraints'      	=> [
        'depends'   => [
            'typo3'          	=> '13.4.0-',
            'container'		=> '3-',
            't3up'          	=> '13-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
