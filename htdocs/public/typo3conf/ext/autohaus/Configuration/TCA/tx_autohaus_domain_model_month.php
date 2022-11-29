<?php
defined ( 'TYPO3_MODE' ) or die ();
return [
    "ctrl" => [
        "label" => "month",
        "title" => "Buchung Monat",
    ],
    "columns" => [
        "month" => [
            "label" => "Monat",
            "config" => [
                "type" => "input"
            ]
        ],
        "day" => [
            'exclude' => 1,
            'label' => 'Buchungtage',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_autohaus_domain_model_day',
                'foreign_field' => 'parentid',
                'foreign_table_field' => 'parenttable',
                'maxitems' => 10,
                'appearance' => [
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ]
    ],
    'types' => [
        '0' => ['showitem' => 'month, day'],
    ],
];