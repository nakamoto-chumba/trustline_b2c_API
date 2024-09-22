fetch('https://trustline.co.ke/api/v2/payments', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({
        amount: 10,
        phone_number: '0798988787',
        api_key: '3A6anVoWFZrRk5qSVl0MGNMOERGMlR3dlhrQ0VWUWJHNDVVVnNaMEdDSw',
        network_code: '1',
        external_reference: 'INV-99992',
        callback_url: 'https://example.com/callback.php',
    })
})
.then(response => response.json())
.then(data => {
    console.log('Success:', data);
})
.catch((error) => {
    console.error('Error:', error);
});
