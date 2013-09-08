<?php
 
if (!isset($_POST['source']) || !isset($_POST['target'])) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
    exit;
}
 
ob_start();
$ch = curl_init($_POST['source']);
curl_setopt($ch,CURLOPT_USERAGENT,'bradshawsguide.org (webmention.org)');
curl_setopt($ch,CURLOPT_HEADER,0);
$ok = curl_exec($ch);
curl_close($ch);
$source = ob_get_contents();
ob_end_clean();
 
header($_SERVER['SERVER_PROTOCOL'] . ' 202 Accepted');
 
# Now do something with $source e.g. parse it for h-entry and h-card and store what you find.
 
?>