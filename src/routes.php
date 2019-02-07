<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->post('/subscribe/[{number}]', function (Request $request, Response $response, array $args) {
    // Subscribe to cat facts
    $event = [
        'number' => $args['number']
    ];

    try {
        $kafka = $this->get('kafka');
        $topic = $kafka->newTopic("cat_fact_subscribe");
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, json_encode($event));

        return $response->withJson([
            'success' => true,
        ]);
    } catch (Exception $e) {
        return $response->withJson([
            'success' => false,
        ]);
    }
});