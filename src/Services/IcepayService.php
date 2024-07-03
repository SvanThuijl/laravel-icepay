<?php

namespace Svanthuijl\Icepay\Services;

use Icepay\API\Client as IcepayClient;

class IcepayService
{
    protected $client;
    protected $completedURL;
    protected $errorURL;

    public function __construct()
    {
        $this->client = new IcepayClient();
        $this->client->setApiKey(config('services.icepay.api_key'));
        $this->client->setApiSecret(config('services.icepay.api_secret'));
        $this->setCompletedURL(config('services.icepay.completed_url'));
        $this->setErrorURL(config('services.icepay.error_url'));
    }

    public function setApiKey($apiKey)
    {
        $this->client->setApiKey($apiKey);
    }

    public function setApiSecret($apiSecret)
    {
        $this->client->setApiSecret($apiSecret);
    }

    public function setCompletedURL($url)
    {
        $this->completedURL = $url;
        $this->client->setCompletedURL($url);
    }

    public function setErrorURL($url)
    {
        $this->errorURL = $url;
        $this->client->setErrorURL($url);
    }

    public function checkout(array $data)
    {
        return $this->client->payment->checkout($data);
    }
    public function methods()
    {
        // @todo implement cache
        return collect($this->client->payment->getMyPaymentMethods()->PaymentMethods);
    }
}
