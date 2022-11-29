<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'autohaus',
    'description' => 'The main extension of autohaus',
    'category' => 'plugin',
    'author' => 'Juljano Aliaj',
    'author_company' => '',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'bootstrap_package'=> '12.0.5',
            'jpfaq' => '10.4.1'


        ],
    ],
];
