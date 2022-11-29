<?php
declare(strict_types = 1);


return [
    \VENDOR\Autohaus\Domain\Model\Categorycomment::class => [
        'tableName' => 'tx_jpfaq_domain_model_categorycomment',
        'properties' => [
            'name' => [
                'fieldName' => 'name'
            ],
            'category' => [
                'fieldName' => 'category'
            ],
            'email' => [
                'fieldName' => 'email'
            ],
            'comment' => [
                'fieldName' => 'comment'
            ],
        ],
    ],
];