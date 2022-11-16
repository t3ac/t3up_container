<?php
declare(strict_types = 1);

/*
 * This file is part of the composer package t3up.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

(static function (): void {
    /**
     * Register 2cols
     */
    
    $L = 'LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:'; 
    
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                '1cols',
                $L.'1Cols',
                $L.'1ColsDes',
                [
                    [
                        ['name' => $L.'center',   'colPos' => 101, 'disallowed' => ['CType' => 'headerimage_content,image,textpic']],
                    ]
                ]
                )
            )
        ->setIcon('EXT:t3up_container/Resources/Public/Icons/gridlayout_col1.svg')
        ->setBackendTemplate('EXT:t3up_container/Resources/Private/Backend/Backend.html')
        ->setSaveAndCloseInNewContentElementWizard(true)
        );
    
    /**
     * Add flexForm
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_container/Configuration/FlexForms/1cols.xml',
        '1cols'
        );
})();
