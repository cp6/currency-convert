<?php
//USD to
function usdtoaud($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $aud = $json->rates->AUD;
    $result = $usd * $aud;
    return $result;
}
function usdtoeuro($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $eur = $json->rates->EUR;
    $result = $usd * $eur;
    return $result;
}
function usdtocad($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $cad = $json->rates->CAD;
    $result = $usd * $cad;
    return $result;
}
function usdtonzd($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $nzd = $json->rates->NZD;
    $result = $usd * $nzd;
    return $result;
}
function usdtogbp($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $gbp = $json->rates->GBP;
    $result = $usd * $gbp;
    return $result;
}
//EURO to
function eurtoaud($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $aud = $json->rates->AUD;
    $result = $eur * $aud;
    return $result;
}
function eurtousd($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $usd = $json->rates->USD;
    $result = $eur * $usd;
    return $result;
}
function eurtocad($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $cad = $json->rates->CAD;
    $result = $eur * $cad;
    return $result;
}
function eurtonzd($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $nzd = $json->rates->NZD;
    $result = $eur * $nzd;
    return $result;
}
function eurtogbp($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $gbp = $json->rates->GBP;
    $result = $eur * $gbp;
    return $result;
}
//AUD to
function audtousd($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $usd = $json->rates->USD;
    $result = $aud * $usd;
    return $result;
}
function audtoeur($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $eur = $json->rates->EUR;
    $result = $aud * $eur;
    return $result;
}
function audtocad($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $cad = $json->rates->CAD;
    $result = $aud * $cad;
    return $result;
}
function audtonzd($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $nzd = $json->rates->NZD;
    $result = $aud * $nzd;
    return $result;
}
function audtogbp($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $gbp = $json->rates->GBP;
    $result = $aud * $gbp;
    return $result;
}
?>
