<?php
// Routes

$app->post('/', function (\Slim\Http\Request $request, \Slim\Http\Response $response, $args) {
  $post = $request->getParsedBody();
  $return = [
    'text' => 'Hello',
    'attachments' => [
      ['text' => 'Bajs kiss'],
    ]
  ];

  return $response->withJson($return);
});
