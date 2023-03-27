<?php

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://autofacturador.cfdiquadrum.com.mx:8890/api/v1/orders',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
CURLOPT_HTTPHEADER => array(
    'Authorization: Token <TokenID>'
),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
