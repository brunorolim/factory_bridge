<?php

namespace App\Services\Stone;

use App\Services\S3\BridgeS3Interface;

class StoneExtractService implements BridgeS3Interface
{
    /**
     * @param string $localFile
     * @return string
     */
    public function process(string $localFile): string
    {
        /**
         * Carregar e transformar arquivo com regras de negócio particular
         */

        /**
         * Criar arquivo local ou deixar em memória (atenção no tamanho do arquivo)
         */

        $localFileProcess = "app/storage/process/aaaaProcess.json";

        return $localFileProcess;
    }
}
