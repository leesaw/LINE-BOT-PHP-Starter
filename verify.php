<?php
$access_token = 'ljB1CNIY4yJDlfhtmt/ldiQ/XxLh1hszjKwDjIbrKuuIB4wjAX18r+CZ1jAe71XQmju+9vGxyaE7vaUgK/qUg0+GK3sRVUS9zzcxRB+88itvOsFVAujEucV9ydEzu5PipU31DGjIOwQtsaGE7/CReQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
