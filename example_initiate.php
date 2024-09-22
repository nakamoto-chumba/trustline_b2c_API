<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://trustline.co.ke/api/v2/payments',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "amount": 10,
    "phone_number": "0798988787",
    "api_key": "3A6anVoWFZrRk5qSVl0MGNMOERGMlR3dlhrQ0VWUWJHNDVVVnNaMEdDSw", 
    "network_code":"1",
    "external_reference": "INV-99992",
    "callback_url": "https://example.com/callback.php"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
  ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
