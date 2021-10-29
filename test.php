<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, '<The host URL that are protected with CloudFlare mTLS>');
curl_setopt($ch, CURLOPT_SSLCERT, 'client.crt');
curl_setopt($ch, CURLOPT_SSLKEY, 'client.key');
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

var_dump($result);