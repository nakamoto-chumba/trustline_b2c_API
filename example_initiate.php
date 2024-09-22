<?php
$curl = curl_init();

$data = array(
    "amount" => 10,
    "phone_number" => "0798988787",
    "api_key" => "3A6anVoWFZrRk5qSVl0MGNMOERGMlR3dlhrQ0VWUWJHNDVVVnNaMEdDSw",
    "network_code" => "1",
    "external_reference" => "INV-99992",
    "callback_url" => "https://example.com/callback.php"
);

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://trustline.co.ke/api/v2/payments',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
  ),
));

$response = curl_exec($curl);

if(curl_errno($curl)) {
    // Handle cURL error
    echo 'Error: ' . curl_error($curl);
} else {
    echo $response;
}

curl_close($curl);
