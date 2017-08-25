<?php
// Routes

$app->post('/time', function ($request, $response, $args) {
  // Sample log message
  //$this->logger->info($request);

  return 'TIME!';
});
