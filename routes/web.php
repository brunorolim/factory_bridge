<?php

$router->group(['prefix' => 'conciliation'], function () use ($router) {
    $router->get('stone/test', 'ConciliationController@stoneTest');
});