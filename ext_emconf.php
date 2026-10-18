<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_container".
 *
 * 25-09-2026
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY]  = [
  	'title' 		    => 'T3UP - Container',
  	'description' 		=> 'T3UP for EXT:container',
	'category' 		    => 'templates',
	'author' 		    => 'Michael Lang',
  	'author_email' 		=> 'info@t3ac.de',
    'version'           => '14.0.01',
  	'author_company' 	=> 'mediadesign',
  	'state' 		    => 'stable',
    'uploadfolder'    	=> false,
   	'createDirs'       	=> '',
    	'clearCacheOnLoad' 	=> true,
    	'constraints'      	=> [
        'depends'   => [
            'typo3'          	=> '14.3.0-',
            'container'		    => '4-',
            't3up'          	=> '14-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
