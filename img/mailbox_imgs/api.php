



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://etsrds.kapps.in/webapi/enterprise/v1/makecall.py",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array('customer_number' => '+918800992021','agent_number' => '+918860705287','k_number' => '+916366782360','caller_id' => '+918048766873','call_through' => 'website'),
  CURLOPT_HTTPHEADER => array(
    "Authorization: 4353c2e0-8daf-4cd9-9be9-a7cfb022b689"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


{
    "status": "Success",
    "call_id": "3acdaa09-a570-47cf-b8df-5acba938ddf3",
    "custom_params": "{\"call_through\": \"website\"}",
    "call_status": "Call Triggered Successfully",
    "error": "None"
}

