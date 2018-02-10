<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Azhar.Pingandget',
            'Pingandget',
            [
                'Order' => 'list, show, new, edit, delete'
            ],
            // non-cacheable actions
            [
                'Customer' => 'create, update, delete',
                'Order' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pingandget {
                        iconIdentifier = pingandget-plugin-pingandget
                        title = LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_pingandget.name
                        description = LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_pingandget.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingandget_pingandget
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'pingandget-plugin-pingandget',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:pingandget/Resources/Public/Icons/user_plugin_pingandget.svg']
			);
		
    }
);
