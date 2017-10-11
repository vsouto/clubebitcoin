<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;

class CoinsController extends Controller
{

    public function getQuotes()
    {
        // Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

        // Or use your own Guzzle client and pass it in
        $options = [/*...*/];
        $guzzleClient = new Client($options);
        $client = ApiClientFactory::createApiClient($guzzleClient);

        $EtherQuote = $client->getQuote("ETHUSD=X");

        $BitcoinQuote = $client->getQuote("BTCUSD=X");

        $DolarQuote = $client->getQuote("BRL=X");

        return false;
    }

    //
    public function test()
    {
        // Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

        // Or use your own Guzzle client and pass it in
        $options = [/*...*/];
        $guzzleClient = new Client($options);
        $client = ApiClientFactory::createApiClient($guzzleClient);

        // Returns an array of Scheb\YahooFinanceApi\Results\SearchResult
        //$searchResult = $client->search('ETHUSD');
/*
        // Returns an array of Scheb\YahooFinanceApi\Results\HistoricalData
        $historicalData = $client->getHistoricalData("AAPL", ApiClient::INTERVAL_1_DAY, new \DateTime("-14 days"), new \DateTime("today"));

        // Returns Scheb\YahooFinanceApi\Results\ExchangeRate
        $exchangeRate = $client->getExchangeRate("USD", "EUR");

        // Returns an array of Scheb\YahooFinanceApi\Results\ExchangeRate
        $exchangeRates = $client->getExchangeRates([
            ["USD", "EUR"],
            ["EUR", "USD"],
        ]);

        // Returns Scheb\YahooFinanceApi\Results\Quote
        $quote = $client->getQuote("AAPL");

        // Returns an array of Scheb\YahooFinanceApi\Results\Quote
        $quotes = $client->getQuotes(["AAPL", "GOOG"]);*/

        $quote = $client->getQuote("ETHUSD=X");

//var_dump($searchResult);

        dd($quote);

    }

    public function getBitcoinQuote()
    {

        // BTCUSD=X
    }

    public function getEtherQuote()
    {

        // ETHUSD=X
    }

}
