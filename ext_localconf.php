<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */


defined('TYPO3_MODE') or die();
(static function() {
    
    // Add PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_container/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">');
    
    // Register icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    
    $iconRegistry->registerIcon(
        'headerbutton_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_container/Resources/Public/Icons/headerbutton_icon.svg']
   );
    
    $iconRegistry->registerIcon(
        'textbutton_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_container/Resources/Public/Icons/textbutton_icon.svg']
        );   
    
    $iconRegistry->registerIcon(
        'imagebutton_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_container/Resources/Public/Icons/imagebutton_icon.svg']
        ); 
    
    $iconRegistry->registerIcon(
        'texttile_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_container/Resources/Public/Icons/texttile_icon.svg']
        ); 
    
})();
