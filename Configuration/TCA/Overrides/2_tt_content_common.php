<?php
defined('TYPO3') or die();



(static function (): void {
    
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    
    $typeList = '1cols,2cols,3cols,4cols,accordion,tabs,slider';
    
    // Remove header field
    foreach (\TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $typeList, true) as $type) {
        $showitem = $GLOBALS['TCA']['tt_content']['types'][$type]['showitem'];
        $showitem = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $showitem, true);
        $showitem = array_filter($showitem, function ($item): bool {
            return strpos($item, 'header') !== 0;
        });
            $GLOBALS['TCA']['tt_content']['types'][$type]['showitem'] = implode(', ', $showitem);
    }
    // Add headers palette and container options (pi_flexform)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content','--palette--;;headers,--div--;LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:options,pi_flexform;Flexformwerte','1cols,2cols,3cols,4cols,accordion,tabs,slider','after:tx_container_parent');
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content','--palette--;LLL:EXT:t3up/Resources/Private/Language/locallang_backend.xlf:animation_class;animation_fields', 'accordion,tabs', 'after:layout');
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content','--palette--;LLL:EXT:t3up/Resources/Private/Language/locallang_backend.xlf:container_class;onepager_fields', $typeList, 'after:layout');
    
})();