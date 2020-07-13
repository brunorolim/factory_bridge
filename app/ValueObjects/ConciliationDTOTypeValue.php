<?php


namespace App\ValueObjects;

class ConciliationDTOTypeValue extends ValueList
{
    const S3        = 's3';
    const EMAIL     = 'email';
    const API       = 'api';

    protected $_all = [ // phpcs:ignore
        self::S3        => 'Integração via s3',
        self::EMAIL     => 'Integração via mail',
        self::API       => 'Integração via api',
    ];
}