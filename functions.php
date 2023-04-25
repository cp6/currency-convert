<?php

function APIcall(string $base): mixed
{
    return json_decode(file_get_contents("https://api.exchangeratesapi.io/latest?base=$base"));
}

function currencyConvert(float $amount, string $from, string $to, $format = false, $decimals = 2): ?float
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
        //from/to can only be: USD|EUR|CAD|AUD|GBP|JPY|CNY
        return null;
    }

    if ($format) {
        return (float)number_format(($amount * $data->rates->$to), $decimals);
    }

    return $amount * $data->rates->$to;
}
