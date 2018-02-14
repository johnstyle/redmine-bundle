<?php

namespace Johnstyle\RedmineBundle\Service;

use Redmine\Client;

/**
 * Class RedmineClient
 *
 * @author  Jonathan SAHM <contact@johnstyle.fr>
 * @package Johnstyle\RedmineBundle\Service\DependencyInjection
 */
class RedmineClient
{
    /** @var string $url */
    private $url;

    /** @var Client $client */
    private $client;

    /**
     * RedmineClient constructor.
     *
     * @param string $url
     * @param string $token
     */
    public function __construct(string $url, string $token)
    {
        $this->url = $url;
        $this->client = new Client($this->url, $token);
    }

    /**
     * client
     *
     * @return Client
     */
    public function client()
    {
        return $this->client;
    }
}
