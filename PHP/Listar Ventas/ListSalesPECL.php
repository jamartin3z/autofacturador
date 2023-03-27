<?php
$client = new http\Client;
$request = new http\Client\Request;
$request->setRequestUrl('https://autofacturador.cfdiquadrum.com.mx:8890/api/v1/orders');
$request->setRequestMethod('GET');
$request->setOptions(array());
$request->setHeaders(array(
  'Authorization' => 'Token <TokenID>'
));
$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();
?>