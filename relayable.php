<?php
$data = array(
  "link_id" => "YOUR-LINK-ID", 
  "channel" => "relayable.php",
  "message" => "relayable.php, it just works!"
);
$body = json_encode($data);
$ch = curl_init('https://api.relayable.io/messages');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($body))
);
echo curl_exec($ch);
?>