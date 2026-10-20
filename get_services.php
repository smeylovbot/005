<?php
header('Content-Type: application/json; charset=utf-8');
$api_url = "https://khmer-smm.com/api/v2";
$api_key = "c25e94d3af8c3be1ead33e2865929005";

$post_data = array(
    'key' => $api_key,
    'action' => 'services'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>
