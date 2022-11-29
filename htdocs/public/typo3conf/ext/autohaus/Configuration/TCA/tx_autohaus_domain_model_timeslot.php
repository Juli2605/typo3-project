<?php
defined ( 'TYPO3_MODE' ) or die ();
return [
    "ctrl" => [
        "label" => "appointment_start",
        "title" => "Buchung Stunden",
        'enablecolumns' => [
            'endtime' => 'appointment_start',
        ]
    ],
    "columns" => [
        "booked" => [
            "label" => "Zeitspanne gebucht",
            "config" => [
                "type" => "check",
                'default' => 0
            ]
        ],
        'appointment_start' => [
            'label' => 'Terminstart',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]

            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'appointment_end' => [
            'label' => 'Terminedne',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
    ],
    'types' => [
        '0' => ['showitem' => ' booked, appointment_start, appointment_end'],
    ],
];