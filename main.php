<?php
function getUrl($url) { $ch = curl_init(); 
$timeout = 5; // set to zero for no timeout 
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, "212.237.9.64"); //proxy url 
curl_setopt($ch, CURLOPT_PROXYPORT, "3128"); // proxy port number 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "username:pass"); //username:pass 
$file_contents = curl_exec($ch);
curl_close($ch); 
return $file_contents; } 
$urlnya="http://webproxy.to";
echo getUrl($urlnya);
?>
