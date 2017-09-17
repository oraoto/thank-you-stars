<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Oraoto\ThankYouStars\Package;

class PackageTest extends TestCase
{
    public function testGithubRepository()
    {
        $package = new Package(
            'oraoto/strip-bom',
            'https://github.com/oraoto/strip-bom');
        $this->assertTrue($package->isGithubRepository());

        $this->assertEquals($package->githubOwner(), 'oraoto');
        $this->assertEquals($package->githubRepository(), 'strip-bom');
    }
}