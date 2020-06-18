<?php

$curl = curl_init();

$data = "This is my first value";

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.kvstore.io/collections/new_collection/items/first-key',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CUSTOMREQUEST => "PUT",
	CURLOPT_POSTFIELDS => $data,
	CURLOPT_HTTPHEADER => array(
        'kvstoreio_api_key: bb5b27b15ef2cf83cbc9342bb2ac6758bb966e7b66d66d539b3dba3cc2a43f39', 
        'Content-Type: text/plain'
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