<?php
$access_token = 'HbdRoufZO/levqpihCXTdDF2jZhNDOCspGCeBZoPTAuCw5lTRoe2fpJ6/kU3XmIbji6szPr3Q78fAddQmhkApggIBwH3kSeBGvC9rcrHPl+BUO4F9ampz2MJEXZl0fHG1M3HjD0xc66z8u6gJDhrWAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;