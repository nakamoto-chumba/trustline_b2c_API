use Illuminate\Support\Facades\Http;

$response = Http::post('https://trustline.co.ke/api/v2/payments', [
    'amount' => 10,
    'phone_number' => '0798988787',
    'api_key' => '3A6anVoWFZrRk5qSVl0MGNMOERGMlR3dlhrQ0VWUWJHNDVVVnNaMEdDSw',
    'network_code' => '1',
    'external_reference' => 'INV-99992',
    'callback_url' => 'https://example.com/callback.php',
]);

if ($response->successful()) {
    // Handle successful response
    return $response->body();
} elseif ($response->failed()) {
    // Handle error response
    return $response->status();
}
