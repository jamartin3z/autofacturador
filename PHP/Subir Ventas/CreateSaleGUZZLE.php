<?php
$client = new Client();
$headers = [
  'Merchant' => 'ID <MerchantID>',
  'Content-Type' => 'application/json',
  'Authorization' => 'Token <TokenID>'
];
$body = '{
  "concepts": [
    {
      "amount": "1443.40",
      "description": "CONCEPTO 1",
      "discount": 0,
      "no_identification": "CONCEPTO 1",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "86.6038",
          "base": "1443.3963",
          "factor": "Tasa",
          "rate_or_fee": "0.060000",
          "tax": "003",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "1443.40"
    },
    {
      "amount": "653.27",
      "description": "CONCEPTO 2",
      "discount": 0,
      "no_identification": "CONCEPTO 2",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "45.7290",
          "base": "653.2711",
          "factor": "Tasa",
          "rate_or_fee": "0.070000",
          "tax": "003",
          "type": "T"
        },
        {
          "amount": "345.32",
          "base": "6474.81",
          "factor": "Tasa",
          "rate_or_fee": "0.053333",
          "tax": "002",
          "type": "R"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "653.27"
    },
    {
      "amount": "233.95",
      "description": "CONCEPTO 3",
      "discount": 0,
      "no_identification": "CONCEPTO 3",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "21.0551",
          "base": "233.9450",
          "factor": "Tasa",
          "rate_or_fee": "0.090000",
          "tax": "003",
          "type": "T"
        },
        {
          "amount": "647.48",
          "base": "6474.81",
          "factor": "Tasa",
          "rate_or_fee": "0.100000",
          "tax": "001",
          "type": "R"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "233.94"
    },
    {
      "amount": "6673.00",
      "description": "CONCEPTO 4",
      "discount": 0,
      "no_identification": "CONCEPTO 4",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "0.0000",
          "base": "6673.0000",
          "factor": "Tasa",
          "rate_or_fee": "0.000000",
          "tax": "002",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "6673.00"
    },
    {
      "amount": "1623.28",
      "description": "CONCEPTO 5",
      "discount": 0,
      "no_identification": "CONCEPTO 5",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "259.7241",
          "base": "1623.2759",
          "factor": "Tasa",
          "rate_or_fee": "0.160000",
          "tax": "002",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "1623.28"
    },
    {
      "amount": "1443.40",
      "description": "CONCEPTO 6",
      "discount": 0,
      "no_identification": "CONCEPTO 6",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "86.6038",
          "base": "1443.3963",
          "factor": "Tasa",
          "rate_or_fee": "0.060000",
          "tax": "003",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "1443.40"
    },
    {
      "amount": "653.27",
      "description": "CONCEPTO 7",
      "discount": 0,
      "no_identification": "CONCEPTO 7",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "45.7290",
          "base": "653.2711",
          "factor": "Tasa",
          "rate_or_fee": "0.070000",
          "tax": "003",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "653.27"
    },
    {
      "amount": "233.95",
      "description": "CONCEPTO 8",
      "discount": 0,
      "no_identification": "CONCEPTO 8",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "21.0551",
          "base": "233.9450",
          "factor": "Tasa",
          "rate_or_fee": "0.090000",
          "tax": "003",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "233.94"
    },
    {
      "amount": "6673.00",
      "description": "CONCEPTO 9",
      "discount": 0,
      "no_identification": "CONCEPTO 9",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "0.0000",
          "base": "6673.0000",
          "factor": "Tasa",
          "rate_or_fee": "0.000000",
          "tax": "002",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "6673.00"
    },
    {
      "amount": "1623.28",
      "description": "CONCEPTO 10",
      "discount": 0,
      "no_identification": "CONCEPTO 10",
      "obj_imp": "02",
      "quantity": "1",
      "sat_key_product": "10171700",
      "sat_key_unit": "H87",
      "taxes": [
        {
          "amount": "259.7241",
          "base": "1623.2759",
          "factor": "Tasa",
          "rate_or_fee": "0.160000",
          "tax": "002",
          "type": "T"
        }
      ],
      "unit": "PIEZA",
      "unit_price": "1623.28"
    }
  ],
  "date": "2023-03-22T10:48:50",
  "total": 21087.23,
  "order_id": "GbjPWMSQOL002",
  "folio": "lpNUBnzbue002",
  "serial": "qD3608576030002"
}';
$request = new Request('POST', 'https://autofacturador.cfdiquadrum.com.mx:8890/api/v1/order/create/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();

?>