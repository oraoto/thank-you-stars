<?php

namespace Oraoto\ThankYouStars;

class Packagist
{
    /**
     * Find a package by exact package name
     * @param $name string package name
     * @return Package
     */
    public static function findPackage($name)
    {
        $api = 'https://packagist.org/search.json?per_page=1&q=' . $name;
        $raw_response = Curl::get($api);
        $response = json_decode($raw_response, true);

        if (!isset($response['results']) || $response['total'] == 0) {
            return null;
        }
        $package = $response['results'][0];

        if ($package['name'] != $name) {
            return null;
        }
        return new Package($package['name'], $package['repository']);
    }
}
