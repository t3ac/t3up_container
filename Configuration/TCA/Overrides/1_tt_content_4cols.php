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
     * Register 4cols
     */
    
    $L = 'LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:'; 
    
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                '4cols',
                $L.'4Cols',
                $L.'4ColsDes',
                [
                    [
                        ['name' => $L.'left',         'colPos' => 101, 'disallowed' => ['CType' => 'headerimage_content,image,textpic,2cols,3cols,4cols']],
                        ['name' => $L.'centerLeft',   'colPos' => 102, 'disallowed' => ['CType' => 'headerimage_content,image,textpic,2cols,3cols,4cols']],
                        ['name' => $L.'centerRight',  'colPos' => 103, 'disallowed' => ['CType' => 'headerimage_content,image,textpic,2cols,3cols,4cols']],
                        ['name' => $L.'right',        'colPos' => 104, 'disallowed' => ['CType' => 'headerimage_content,image,textpic,2cols,3cols,4cols']]
                    ]
                ]
                )
            )
        ->setIcon('EXT:t3up_container/Resources/Public/Icons/gridlayout_col4.svg')
        ->setBackendTemplate('EXT:t3up_container/Resources/Private/Backend/Backend.html')
        ->setSaveAndCloseInNewContentElementWizard(true)
        );
    
    /**
     * Add flexForm
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_container/Configuration/FlexForms/4cols.xml',
        '4cols'
        );
})();
