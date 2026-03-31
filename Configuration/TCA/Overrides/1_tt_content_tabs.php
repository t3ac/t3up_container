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
     * Register tabs
     */
    
    $L = 'LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:'; 
    
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'tabs',
                $L.'tabs',
                $L.'tabsDes',
                [
                    [
                        ['name' => $L.'center',  'colPos' => 101, 'disallowed' => ['CType' => 't3upheaderimage_content,2cols,3cols,4cols,image,textpic,tabs,slider,accordion']],
                    ]
                ]
            )
        )
        ->setIcon('EXT:t3up_container/Resources/Public/Icons/gridlayout_tabs.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
        );
    /**
     * Add flexForm
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_container/Configuration/FlexForms/tabs.xml',
        'tabs'
        );
})();
