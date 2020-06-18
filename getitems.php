<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://api.kvstore.io/collections/new_collection/items?limit=10&sort=asc',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
        'kvstoreio_api_key: bb5b27b15ef2cf83cbc9342bb2ac6758bb966e7b66d66d539b3dba3cc2a43f39', 
        'Content-Type: application/json'
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}