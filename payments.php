<?php

//////


$ch = curl_init();

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

curl_setopt($ch, CURLOPT_URL, "https://api.mastercard.com/idsvc/v1/identity");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));   // post data
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type: application/json", "X-Riscosity-Tkn: " . $_SESSION["X-Riscosity-Tkn"]));

$json = curl_exec($ch);


//////////////


$ch = curl_init();

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_URL, "https://developer.okta.com/api/v1/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type: application/json", "Authorization: SSWS " . $_SESSION["OktaToken"]));

$json = curl_exec($ch);

////
