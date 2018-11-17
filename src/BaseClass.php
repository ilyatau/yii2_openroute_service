<?php
/**
 * Created by PhpStorm.
 * User: ilyatau
 * Date: 16/11/18
 * Time: 21:18
 */

namespace ilyatau\yii2_openroute_service;
use yii\httpclient\Client;

class BaseClass
{
    private $api_key;
    const VERSION = '4.7';
    const URL = 'https://api.openrouteservice.org';

    /**
     * BaseClass constructor.
     * @param $api_key
     */
    public function __construct(string $api_key)
    {
        $this->setApiKey($api_key);
    }

    /**
     * @return mixed
     */
    public function getApiKey() : string
    {
        return $this->api_key;
    }

    /**
     * @param mixed $api_key
     */
    public function setApiKey(string $api_key)
    {
        $this->api_key = $api_key;
    }

    public function request(array $data){
        $client = new Client(['baseUrl' => self::URL]);
        $data['api_key'] = $this->getApiKey();
        $response = $client->{$this::METHOD}($this::API_PATH,$data)
            ->send();
        if ($response->isOk) {
            return $response->data;
        }else{
            throw new \Exception('request failed');
        }

    }
}