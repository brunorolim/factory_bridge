<?php

namespace App\Services\S3;

use App\Services\DTOAbstractService;

class S3Service extends DTOAbstractService
{
    /**
     * @var BridgeS3Interface
     */
    private $bridgeS3;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $directory;

    /**
     * S3Service constructor.
     * @param BridgeS3Interface $bridgeS3
     */
    public function __construct(BridgeS3Interface $bridgeS3)
    {
        $this->bridgeS3 = $bridgeS3;
    }

    public function execute()
    {
        /**
         * Regras de negócio comum
         * ex: carregar arquivos, e enviar para tratamento individual
         */

        $localFile = "app/storage/aaa.cnab,txt,xls...";

        try{
            $localFileProcess = $this->bridgeS3->process($localFile);

            /**
             * Enviar para S3 para fila de processamento
             */
            $s3URI = $this->sendDTOFileToS3($localFileProcess);

            $this->sendToPersistentJob($s3URI);

            /**
             * Move o arquivo para a pasta de processado
             */

        }catch (\Exception $ex) {
            /**
             * Move o arquivo para a pasta de falha
             */
        }
    }
}
