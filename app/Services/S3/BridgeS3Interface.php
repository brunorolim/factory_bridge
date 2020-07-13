<?php

namespace App\Services\S3;

interface BridgeS3Interface
{
    /**
     * @param string $localFile
     * @return string
     */
    public function process(string $localFile) : string ;
}