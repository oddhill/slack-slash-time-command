<?php
// Routes

$app->post('/time', function ($request, $response, $args) {
  return $response->withJson(array(
    'response_type' => 'in_channel',
    'text' => 'TIME!',
  ));
});
