<?php
$ip = $_SERVER['REMOTE_ADDR'];
$discordWebhook = "YOUR_DISCORD_WEBHOOK_URL";

$message = "New user joined the website. IP: $ip";

$data = array(
    "content" => $message
);

$curl = curl_init($discordWebhook);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen(json_encode($data)))
);

$response = curl_exec($curl);

if ($response === false) {
    echo "Error: " . curl_error($curl);
} else {
    echo "Message sent successfully to Discord!";
}

curl_close($curl);
?>
