<?php

namespace App\Services;

use App\Services\S3\S3Service;
use App\ValueObjects\ConciliationDTOTypeValue;
use Illuminate\Support\Facades\Config;

class DTOFactoryService
{
    public static function getDTO(string $config): DTOAbstractService
    {
        $fullConfig = sprintf("conciliation.%s", $config);

        if (!Config::has($fullConfig)){
            throw new \Exception("Configuração não localizada {$fullConfig}");
        }

        $dtoConfig = Config::get($fullConfig);
        $dto = null;

        switch ($dtoConfig['dto']['type']) {
            case ConciliationDTOTypeValue::S3:
                $dto = new S3Service(new $dtoConfig['dto']['bridge']);
                $dto->key = $dtoConfig['s3']['key'];
                $dto->secret = $dtoConfig['s3']['secret'];
                $dto->region = $dtoConfig['s3']['region'];
                $dto->bucket = $dtoConfig['s3']['bucket'];
                $dto->directory = $dtoConfig['s3']['directory'];
                break;
            default:
                throw new \Exception(sprintf("Tipo de DTO não configurado: %s", $dtoConfig['dto']['type']));
        }

        $dto->domain = $dtoConfig['dto']['domain'];
        $dto->provider = $dtoConfig['dto']['provider'];
        $dto->functionality = $dtoConfig['dto']['functionality'];

        return $dto;
    }
}
