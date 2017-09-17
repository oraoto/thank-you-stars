<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Oraoto\ThankYouStars\Packagist;
use Oraoto\ThankYouStars\Package;

class PackagistTest extends TestCase
{
    public function testLaravelCors()
    {
        $package = Packagist::findPackage('barryvdh/laravel-cors');
        $this->assertInstanceOf(Package::class, $package);
    }

    public function testNonExist()
    {
        $package = Packagist::findPackage('oraoto/laravel');
        $this->assertNull($package);
    }
}