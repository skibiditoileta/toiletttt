<?php
$discordWebhook = "https://discord.com/api/webhooks/1215341442495684619/EI52nygxr-EO1T3xfIQD2crB5WIMPAA4X8aiPhn_kIr3Fs6M20KGAT-Lk0PrKUYu10sb";

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
