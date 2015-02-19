<?php 
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer 4U4k4Ht2afW0pezlMk9EUg'));
curl_setopt($curl, CURLOPT_URL, "https://connect.squareup.com/v1/F4AX7M5S6Z6E2/payments");

if(!curl_exec($curl)){
        die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
    }
    $ch = curl_exec ($curl);
    curl_close ($curl);
    $ch = json_decode($ch, true);
    $c = count($ch);


    echo($ch);?>
