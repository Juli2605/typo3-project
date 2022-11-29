<?php
defined ( 'TYPO3_MODE' ) or die ();
return [
    "ctrl" => [
        "label" => "model",
        "title" => "Autos",

    ],
    "columns" => [
        "model" => [
            "label" => "Model",
            "config" => [
                "type" => "input"
                ]
        ],
        "production_year" => [
            "label" => "Jahr",
            "config" => [
                "type" => "input"
            ]
        ],
        "price" => [
            "label" => "Preis",
            "config" => [
                "type" => "input",
            ]
        ],
        "booked" => [
            "label" => "Gebucht",
            "config" => [
                "type" => "check"
            ]
        ],
        "sold" => [
            "label" => "Verkauft",
            "config" => [
                "type" => "check"
            ]
        ],
        "image" => [
            "label" => "Bild",
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                array('minitems'=>0, 'maxitems'=>10),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile.ext']
            ),
        ],
        "video_presentation"=>[
            "label" => "Video",
            "config" => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                "video_presentation"
            )
        ],
        'month' => [
            'exclude' => 1,
            'label' => 'Buchungmonat',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_autohaus_domain_model_month',
                'foreign_field' => 'parentid',
                'foreign_table_field' => 'parenttable',
                'maxitems' => 10,
                'appearance' => [
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'model, production_year, price, booked, sold, image, video_presentation, month'],
    ],
];