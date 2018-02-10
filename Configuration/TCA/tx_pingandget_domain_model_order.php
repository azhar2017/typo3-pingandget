<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order',
        'label' => 'order_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'order_id,order_type,origin,destination,order_description,order_price,customer_id',
        'iconfile' => 'EXT:pingandget/Resources/Public/Icons/tx_pingandget_domain_model_order.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, order_id, order_type, origin, destination, order_description, order_price, customer_id',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, order_id, order_type, origin, destination, order_description, order_price, customer_id, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_pingandget_domain_model_order',
                'foreign_table_where' => 'AND tx_pingandget_domain_model_order.pid=###CURRENT_PID### AND tx_pingandget_domain_model_order.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'order_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.order_id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'order_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.order_type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'origin' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.origin',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'destination' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.destination',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'order_description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.order_description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'order_price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.order_price',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'customer_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:pingandget/Resources/Private/Language/locallang_db.xlf:tx_pingandget_domain_model_order.customer_id',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_pingandget_domain_model_customer',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    
    ],
];
