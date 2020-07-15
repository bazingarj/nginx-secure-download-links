<?php 

$expires = 1895776532;  # e.g. 2 hours url expiry would be time()+7200; 
#Test timestamp  is GMT Sunday, January 27, 2030 8:35:32 PM

$domain = 'https://example.com';

$uri = urldecode('/files/video/data.mp4'); #uri$ip = '127.0.0.1'; #fetch client ip and insert it here dynamically

$secure_text = 'enigma'; #change according to nginx directive;

function getSecureHash($ip, $uri, $secure_text, $expires){

  $str = $expires.$uri.$ip.' '.$secure_text;
 $tmp = md5( $str, true );
 $tmp1 = base64_encode( $tmp );
 return str_replace( array('+', '/', '='), array('-', '_', ''), $tmp1 );
}

$url = "$domain$uri?md5=".getSecureHash($ip, $uri, $secure_text, $expires)."&expires=$expires";

echo $url;

#prints https://example.com/files/video/data.mp4?md5=-nw0Q-e6EPFYGlgLqlBzgw&expires=1895776532

# this url expires on GMT Sunday, January 27, 2030 8:35:32 PM
