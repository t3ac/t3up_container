<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
    
    // Add PageTSConfig
	ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_container/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'");
    
});
