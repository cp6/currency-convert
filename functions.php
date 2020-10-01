<?php

function APIcall($base)
{
    return json_decode(file_get_contents("https://api.exchangeratesapi.io/latest?base=$base"));
}

function currencyConvert($amount, $from, $to, $format = false, $decimals = 2)
{
    if ($from === 'USD') {
        $data = APIcall('USD');
    } elseif ($from === 'EUR') {
        $data = APIcall('EUR');
    } elseif ($from === 'CAD') {
        $data = APIcall('CAD');
    } elseif ($from === 'AUD') {
        $data = APIcall('AUD');
    } elseif ($from === 'GBP') {
        $data = APIcall('GBP');
    } elseif ($from === 'JPY') {
        $data = APIcall('JPY');
    } elseif ($from === 'CNY') {
        $data = APIcall('CNY');
    } else {
        return "from/to must can only be: USD|EUR|CAD|AUD|GBP|JPY|CNY";
    }
    if ($format) {
        return number_format(($amount * $data->rates->$to), $decimals);
    } else {
        return ($amount * $data->rates->$to);
    }
}