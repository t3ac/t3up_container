<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();

$boot = function () {
    # Enable/dissable the TCEForm/ImagePredefinitions -> addPageTSConfig  
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_container/Configuration/TsConfig/TCEForm.typoscript">');
};

$boot();
unset($boot);
