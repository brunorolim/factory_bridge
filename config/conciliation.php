<?php

return [
    'conciliation_stone_extract' => [
        'dto' => [
            'domain' => 'conciliation',
            'provider' => 'stone',
            'functionality' => 'extract',
            'bridge' => \App\Services\Stone\StoneExtractService::class,
            'type' => \App\ValueObjects\ConciliationDTOTypeValue::S3,
        ],
        's3' => [
            'key' => env('PICPAY_CONCILIATION_STONE_EXTRACT_KEY', 'key'),
            'secret' => env('PICPAY_CONCILIATION_STONE_EXTRACT_SECRET', 'secret'),
            'region' => env('PICPAY_CONCILIATION_STONE_EXTRACT_REGION', 'region'),
            'bucket' => env('PICPAY_CONCILIATION_STONE_EXTRACT_BUCKET', 'bucket'),
            'directory' => env('PICPAY_CONCILIATION_STONE_EXTRACT_DIRECTORY', 'directory'),
        ]
    ]
];