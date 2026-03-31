<?php

defined('TYPO3') or die;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

call_user_func(static function () {
    
    // Add PageTSConfig
	ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_container/Configuration/TsConfig/TCEFrames.tsconfig'");
	
	
	# Auslesewn Konfiguration ext_conf_template.txt
	
	$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
	    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
	    );
	$Configuration = $extensionConfiguration->get('t3up_container');
	

	if ($Configuration['TCEForm']) {
	    ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_container/Configuration/TsConfig/AccordionFrames.tsconfig'");
	}
	
	
    
});
