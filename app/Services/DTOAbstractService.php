<?php

namespace App\Services;

abstract class DTOAbstractService
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $functionality;

    abstract public function execute();

    /**
     * @param string $localFile
     * @return string
     */
    final protected function sendDTOFileToS3(string $localFile): string
    {
        $fileName = "fileNameS3.json";
        $s3URI = $this->getS3URI($fileName);

        /**
         * Subir arquivo S3
         */


        return $s3URI;
    }

    /**
     * @param string $s3URI
     */
    final protected function sendToPersistentJob(string $s3URI)
    {
        /**
         * Enviar para a fila de persistência
         */

    }

    /**
     * @param string $fileName
     * @return string
     */
    private function getS3URI(string $fileName) : string
    {
        return sprintf(
            "%s/%s/%s/%s",
            $this->domain,
            $this->provider,
            $this->functionality,
            $fileName
        );
    }
}
