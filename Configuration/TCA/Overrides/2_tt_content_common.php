<?php
declare(strict_types = 1);

/*
 * This file is part of the composer package buepro/typo3-container-elements.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

(static function (): void {
    $typeList = '1cols,2cols,3cols,4cols,accordion,tabs,2tabs,3tabs,4tabs,slide';
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
        'tt_content',
        '--palette--;;headers, --div--;LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:container,pi_flexform;LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:options',
        $typeList,
        'after:tx_container_parent'
    );
    if(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('t3up')) {
        // Palette hinzufügen, nach Layout - dadurch Anzeige im Backend
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
            'tt_content','--palette--;LLL:EXT:t3up/Resources/Private/Language/locallang_backend.xlf:padding_class;padding_fields', '', 'after:layout');
    }
    
})();
