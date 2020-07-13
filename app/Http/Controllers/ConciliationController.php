<?php

namespace App\Http\Controllers;

use App\Services\DTOFactoryService;
use Laravel\Lumen\Routing\Controller as BaseController;

class ConciliationController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function stoneTest()
    {
        $dto = DTOFactoryService::getDTO("conciliation_stone_extract");
        $dto->execute();

        return response()->json();
    }
}
