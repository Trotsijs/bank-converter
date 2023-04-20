<?php declare(strict_types=1);

namespace App;

class Converter
{
    private ApiClient $client;

    public function __construct()
    {
        $this->client = new ApiClient();
    }

    function convert(float $amount, string $toCurrency)
    {
        $output = 0;
        $xmlData = $this->client->getData();
        foreach ($xmlData->Currencies->Currency as $currency) {
            if ($currency->ID == $toCurrency) {
                $output = $currency->Rate * $amount;
            }
        }

        return $output;
    }

}