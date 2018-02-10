<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Azhar.Pingandget',
            'Pingandget',
            'pingandget'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('pingandget', 'Configuration/TypoScript', 'pingandget');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pingandget_domain_model_customer', 'EXT:pingandget/Resources/Private/Language/locallang_csh_tx_pingandget_domain_model_customer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pingandget_domain_model_customer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pingandget_domain_model_order', 'EXT:pingandget/Resources/Private/Language/locallang_csh_tx_pingandget_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pingandget_domain_model_order');

    }
);
