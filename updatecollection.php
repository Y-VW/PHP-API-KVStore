<?php

$url = 'https://api.kvstore.io/collections';
$collection_name = 'new_collection';
$request_url = $url . '/' . $collection_name;

$data = [
  'public_write' => true
];

$curl = curl_init($request_url);

curl_setopt_array($curl, array(
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'kvstoreio_api_key: bb5b27b15ef2cf83cbc9342bb2ac6758bb966e7b66d66d539b3dba3cc2a43f39', 
    'Content-Type: application/json'
  )
));

$response = curl_exec($curl);
curl_close($curl);

echo $response . PHP_EOL;