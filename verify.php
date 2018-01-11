<?php
$access_token = '/KmSP/qrLVhxFPErS/e/YfhFAhl4laAZudZOOJc8lnxjEtnWzEUTG7c/TlhJYPLGzyIZ6bMI8WCTAJ8YYiS2C11FzeR3HZn/q/nukFATYwZ6kjDjHzeZ1i5DCJixsXVVoruOYk6W64Sy+dv7IKc5zgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
