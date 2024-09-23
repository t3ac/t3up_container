<?php

defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['headerbutton']   =  'headerbutton_icon';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['imagebutton']    =  'imagebutton_icon';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textbutton']     =  'textbutton_icon';

// Get extension configuration
$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
);


// Add to content type dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    ['Headerbutton', 'headerbutton', 'headerbutton_icon', 'container'],
    'tabs',
    'after'
    );

// Add to content type dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    ['Imagebutton', 'imagebutton', 'imagebutton_icon', 'container'],
    'tabs',
    'after'
    );


// Add to content type dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    ['Textbutton', 'textbutton', 'textbutton_icon', 'container'],
    'tabs',
    'after'
    );


$GLOBALS['TCA']['tt_content']['types']['headerbutton']=[
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            header, 
            header_link,
            CType,
		--div--;LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:headerbutton.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;appearanceLinks,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'header' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 80,
            ]
        ],
    ]
];

// Add a flexform to the headerbutton CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_container/Configuration/FlexForms/headerbutton.xml',
    'headerbutton'
    );

$GLOBALS['TCA']['tt_content']['types']['textbutton']=[
    'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    header,
                    header_link,
                    header_layout,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                    CType,
		         --div--;LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:headerbutton.flexvalues, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
            'config' => [
                'enableRichtext' => false,
                'rows' => 5,
                'max' => 200,
            ]
        ],
        'header' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 80,
            ],
        ],
    ]
];


// Add a flexform to the textbutton CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_container/Configuration/FlexForms/textbutton.xml',
    'textbutton'
    );


$GLOBALS['TCA']['tt_content']['types']['imagebutton']=[
    'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    header,
                    header_link,
                    assets,
                    overlayfunction,
                    CType,
    		    --div--;LLL:EXT:t3up_container/Resources/Private/Language/locallang_backend.xlf:headerbutton.flexvalues, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'assets' => [
            'config' => [
                'maxitems' => '1',
                'minitems' => '1'
            ]
        ],
    ]
];


// Add a flexform to the imagebutton CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_container/Configuration/FlexForms/imagebutton.xml',
    'imagebutton'
    );
