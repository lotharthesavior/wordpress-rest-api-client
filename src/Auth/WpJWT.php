<?php

namespace Vnn\WpApiClient\Auth;

use Psr\Http\Message\RequestInterface;

/**
 * Class WpBasicAuth
 * @package Vnn\WpApiClient\Auth
 */
class WpJWT implements AuthInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * WpBasicAuth constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * {@inheritdoc}
     */
    public function addCredentials(RequestInterface $request)
    {
        return $request->withHeader(
            'Authorization',
            'Bearer ' . $this->token
        );
    }
}

