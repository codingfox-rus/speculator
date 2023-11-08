<?php
namespace app\components\parsers;

use GuzzleHttp\Client;

class ByBit 
{
    private const HOST = 'https://api-testnet.bybit.com';
    private const ORDER_BOOK_URL = '/v5/market/orderbook';
    
    private Client $client;
    
    public function __construct() 
    {
        $this->client = $client = new Client([
            'base_uri' => self::HOST,
            'timeout'  => 30,
        ]);
    }
    
    public function getData(): string
    {
        $response = $this->client->get(self::ORDER_BOOK_URL . '?category=linear&symbol=BTCUSDT');
        $data = (string) $response->getBody();
        
        return $data;
    }    
}
