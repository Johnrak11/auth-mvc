<?php function convertCurrency($amount, $currency)
{
    $exchangerate = $currency == "EUR" ? 4200 : 400;
    return number_format($amount, 2) * $exchangerate;
}

$euro = 100;
$dollar = 50;

echo "$euro Euro = " . convertCurrency($euro, "EUR") . " ៛" . "<br />";
echo "$dollar Dollar = " . convertCurrency($dollar, "USD") . " ៛";
