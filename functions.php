<?php
//USD to
function usdtoaud($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $aud = $json->rates->AUD;
    $result = $usd * $aud;
    echo $result;
    return $result;
}
function usdtoeuro($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $eur = $json->rates->EUR;
    $result = $usd * $eur;
    echo $result;
    return $result;
}
function usdtocad($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $cad = $json->rates->CAD;
    $result = $usd * $cad;
    echo $result;
    return $result;
}
function usdtonzd($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $nzd = $json->rates->NZD;
    $result = $usd * $nzd;
    echo $result;
    return $result;
}
function usdtogbp($usd) {
    $data = file_get_contents('http://api.fixer.io/latest?base=USD');
    $json = json_decode($data);
    $gbp = $json->rates->GBP;
    $result = $usd * $gbp;
    echo $result;
    return $result;
}
//EURO to
function eurtoaud($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $aud = $json->rates->AUD;
    $result = $eur * $aud;
    echo $result;
    return $result;
}
function eurtousd($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $usd = $json->rates->USD;
    $result = $eur * $usd;
    echo $result;
    return $result;
}
function eurtocad($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $cad = $json->rates->CAD;
    $result = $eur * $cad;
    echo $result;
    return $result;
}
function eurtonzd($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $nzd = $json->rates->NZD;
    $result = $eur * $nzd;
    echo $result;
    return $result;
}
function eurtogbp($eur) {
    $data = file_get_contents('http://api.fixer.io/latest?base=EUR');
    $json = json_decode($data);
    $gbp = $json->rates->GBP;
    $result = $eur * $gbp;
    echo $result;
    return $result;
}
//AUD to
function audtousd($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $usd = $json->rates->USD;
    $result = $aud * $usd;
    echo $result;
    return $result;
}
function audtoeur($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $eur = $json->rates->EUR;
    $result = $aud * $eur;
    echo $result;
    return $result;
}
function audtocad($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $cad = $json->rates->CAD;
    $result = $aud * $cad;
    echo $result;
    return $result;
}
function audtonzd($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $nzd = $json->rates->NZD;
    $result = $aud * $nzd;
    echo $result;
    return $result;
}
function audtogbp($aud) {
    $data = file_get_contents('http://api.fixer.io/latest?base=AUD');
    $json = json_decode($data);
    $gbp = $json->rates->GBP;
    $result = $aud * $gbp;
    echo $result;
    return $result;
}
?>