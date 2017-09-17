<?php

namespace Oraoto\ThankYouStars;

class Github
{

    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function starRepository($owner, $repository)
    {
        $api = "https://api.github.com/user/starred/$owner/$repository";
        $headers = [
            'User-Agent: thank-you-stars',
            'Authorization: token ' . $this->token
        ];
        try {
            $result = Curl::put($api, $headers);
            return true;
        } catch (\Exception $ex) {
            fwrite(STDERR, $ex->getMessage());
            return false;
        }

    }

    public static function loadFromConfig()
    {
        $configFile = static::getHome() . '/.thank-you-stars.json';
        $token = @json_decode(file_get_contents($configFile), true)['token'];
        if (!$token) {
            return null;
        }
        return new Github($token);
    }

    private static function getHome()
    {
        if (isset($_SERVER['HOMEDRIVE'])) {
            return $_SERVER['HOMEDRIVE'] . $_SERVER['HOMEPATH'];
        }
        if (isset($_SERVER['HOME'])) {
            return $_SERVER['HOME'];
        }
        return getenv('HOME');
    }
}
