<?php
declare(strict_types=1);

use Orkester\Manager;
use Slim\App;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

return function (App $app) {
    $app->options('/{routes:.+}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->post('/graphql', function ($req, $res) {
        $instance = new \Orkester\MVC\MController();

        $instance->setRequestResponse($req, $res);
        $transaction = \Orkester\MVC\MModelMaestro::beginTransaction();
        try {
            $data = Manager::getData();

            $executor = new \Orkester\GraphQL\Executor($data->query, $data->variables ?? []);
            $result = $executor->execute();
            $response = ['data' => $result];
            $transaction->rollback();
            return $instance->renderList($response);
        } catch (\Orkester\Exception\EGraphQLException $e) {
            $transaction->rollback();
            return $instance->renderList(['errors' => $e->errors]);
        } catch (Exception $e) {
            mdump($e->getMessage());
            return $instance->renderList(['exception' => 'internal server error']);
        }
    });

};
