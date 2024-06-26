<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$boot = function () {
    
    ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_container/Configuration/TsConfig/TCEFrames.tsconfig'");

};

$boot();
unset($boot);
