<?php

$app->get('/time', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
