<?php
defined ( 'TYPO3_MODE' ) or die ();
return [
    "ctrl" => [
        "label" => "day",
        "title" => "Buchung Tag",
    ],
    "columns" => [
        "day" => [
            "label" => "Tag",
            "config" => [
                "type" => "input"
            ]
        ],
        "timeslot" => [
            'exclude' => 1,
            'label' => 'Buchungstunden',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_autohaus_domain_model_timeslot',
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
        '0' => ['showitem' => 'day, timeslot'],
    ],
];