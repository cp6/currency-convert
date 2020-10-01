<?php
require_once('functions.php');

echo currencyConvert(200, 'USD', 'AUD');//How much is $200 USD in AUD?

//With formatting to 2 decimals
echo currencyConvert(100, 'CAD', 'NZD', true, 2);