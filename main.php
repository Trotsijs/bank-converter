<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Converter;

$amount = (float) readline('Please enter amount you want to convert: ');
$toCurrency = strtoupper(readline('Please enter currency to convert to: '));

$currencyConverter = new Converter();
$result = number_format($currencyConverter->convert($amount, $toCurrency), 2);
echo '→ ' . $amount . ' EUR is ' . $result . ' ' . $toCurrency;




