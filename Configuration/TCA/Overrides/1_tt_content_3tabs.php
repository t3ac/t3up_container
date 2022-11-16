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
     * Register 3tabs
     */
    
    $L = 'LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:'; 
    
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                '3tabs',
                $L.'3tabs',
                $L.'3tabsDes',
                [
                    [
                        ['name' => $L.'left',   'colPos' => 101, 'disallowed' => ['CType' => 'headerimage_content,2cols,3cols,4cols,image,textpic,tabs,2tabs,3tabs,4tabs,slide,accordion']],
                        ['name' => $L.'center', 'colPos' => 102, 'disallowed' => ['CType' => 'headerimage_content,2cols,3cols,4cols,image,textpic,tabs,2tabs,3tabs,4tabs,slide,accordion']],
                        ['name' => $L.'right',  'colPos' => 103, 'disallowed' => ['CType' => 'headerimage_content,2cols,3cols,4cols,image,textpic,tabs,2tabs,3tabs,4tabs,slide,accordion']]
                    ]
                ]
                )
            )
        ->setIcon('EXT:t3up_container/Resources/Public/Icons/gridlayout_tab3.svg')
        ->setBackendTemplate('EXT:t3up_container/Resources/Private/Backend/Backend.html')
        ->setSaveAndCloseInNewContentElementWizard(true)
        );
    /**
     * Add flexForm
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_container/Configuration/FlexForms/3tabs.xml',
        '3tabs'
        );
})();
