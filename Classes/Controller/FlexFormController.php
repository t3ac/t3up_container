<?php
namespace T3ac\T3upContainer\Controller;

/*
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

class FlexFormController {

    /**
     * @param array $config
     * @return array
     */
    public function getOneColumnOptions($config): array
    {
        return \T3ac\T3upContainer\Controller\FlexFormController::getColumnOptions($config);
    }
	
    /**
     * @param array $config
     * @return array
     */
    public function getTwoColumnOptions($config): array
    {
        return \T3ac\T3upContainer\Controller\FlexFormController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getThreeColumnOptions($config): array
    {
        return \T3ac\T3upContainer\Controller\FlexFormController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getFourColumnOptions($config): array
    {
        return \T3ac\T3upContainer\Controller\FlexFormController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public static function getColumnOptions($config): array
    {
        // xlCol, mdCol, smCol, Col or lgCol
        $fieldName = $config['field'];
        $columnType = substr($fieldName, 0, -1);

        $optionList = array();
        switch ( $columnType ) {
            // small
            case 'Col':
                $optionList = array(
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.notset', ''),
                    array('25% (col-3)', 'col-3'),
                    array('33% (col-4)', 'col-4'),
                    array('50% (col-6)', 'col-6'),
                    array('66% (col-8)', 'col-8'),
                    array('75% (col-9)', 'col-9'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.moreWidth', '--div--'),
                    array('8.3%  (col-1)', 'col-1'),
                    array('16.7% (col-2)', 'col-2'),
                    array('41.7% (col-5)', 'col-5'),
                    array('58.3% (col-7)', 'col-7'),
                    array('83.3% (col-10)', 'col-10'),
                    array('91.7% (col-11)', 'col-11'),
                    array('100%  (col-12)', 'col-12'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.moreOptions', '--div--'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.notset', ' '),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.variableWidth', 'col-auto'));
                break;

            // medium 
            case 'mdCol':
                $optionList = array(
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.notset', ''),
                    array('25% (col-md-3)', 'col-md-3'),
                    array('33% (col-md-4)', 'col-md-4'),
                    array('50% (col-md-6)', 'col-md-6'),
                    array('66% (col-md-8)', 'col-md-8'),
                    array('75% (col-md-9)', 'col-md-9'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.moreWidth', '--div--'),
                    array('8.3%  (col-md-1)', 'col-md-1'),
                    array('16.7% (col-md-2)', 'col-md-2'),
                    array('41.7% (col-md-5)', 'col-md-5'),
                    array('58.3% (col-md-7)', 'col-md-7'),
                    array('83.3% (col-md-10)', 'col-md-10'),
                    array('91.7% (col-md-11)', 'col-md-11'),
                    array('100%  (col-md-12)', 'col-md-12'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.moreOptions', '--div--'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.variableWidth', 'col-md-auto'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.hidden', 'd-md-none'));
                break;


            //  large
            case 'lgCol':
                $optionList = array(array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.notset', ''),
                    array('25% (col-lg-3)', 'col-lg-3'),
                    array('33% (col-lg-4)', 'col-lg-4'),
                    array('50% (col-lg-6)', 'col-lg-6'),
                    array('66% (col-lg-8)', 'col-lg-8'),
                    array('75% (col-lg-9)', 'col-lg-9'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.moreWidth', '--div--'),
                    array('8.3%  (col-lg-1)', 'col-lg-1'),
                    array('16.7% (col-lg-2)', 'col-lg-2'),
                    array('41.7% (col-lg-5)', 'col-lg-5'),
                    array('58.3% (col-lg-7)', 'col-lg-7'),
                    array('83.3% (col-lg-10)', 'col-lg-10'),
                    array('91.7% (col-lg-11)', 'col-lg-11'),
                    array('100%  (col-lg-12)', 'col-lg-12'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.moreOptions', '--div--'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.variableWidth', 'col-lg-auto'),
                    array('LLL:EXT:t3up_container/Resources/Private/Language/locallang_flexform.xlf:label.hidden', 'd-lg-none'));
                break;

        }
        $config['items'] = array_merge($config['items'], $optionList);
        return $config;
    }


}