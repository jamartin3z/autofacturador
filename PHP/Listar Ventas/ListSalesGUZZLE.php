<?php
$client = new Client();
$headers = [
  'Authorization' => 'Token <TokenID>'
];
$request = new Request('GET', 'https://autofacturador.cfdiquadrum.com.mx:8890/api/v1/orders', $headers);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();

?>