<?php
 //send message to telegrame grou
              
              
 $url = 'https://api.telegram.org/bot5787838634:AAFCgaoeP9tWA4IV5O68jtwwTVlMwEzpX5w/sendMessage';
              
              
 $data = array('chat_id' => '-770616652', 'text' => $title . 'is Created in the database');

 // use key 'http' even if you send the request to https://...
 $options = array(
     'http' => array(
         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
         'method'  => 'POST',
         'content' => http_build_query($data)
     )
 );
 $context  = stream_context_create($options);
 $result = file_get_contents($url, false, $context);

?>