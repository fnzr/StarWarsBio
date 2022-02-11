<?php
declare(strict_types=1);

use Slim\App;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Orkester\MVC\MGraphQLController;

return function (App $app) {
    $app->options('/{routes:.+}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->post('/graphql', function ($req, $res) {
        $transaction = \Orkester\MVC\MModelMaestro::beginTransaction();
        $controller = new MGraphQLController($req, $res);
        $response = $controller->render();
        $transaction->rollback();
        return $response;
    });

};
