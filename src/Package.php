<?php

namespace Oraoto\ThankYouStars;

class Package
{
    public $name;
    public $repository;

    public function __construct($name, $repository)
    {
        $this->name = $name;
        $this->repository = $repository;
    }

    public function isGithubRepository()
    {
        return !!preg_match('/github.com/', $this->repository);
    }

    public function githubOwner()
    {
        preg_match(':github.com/(.*?)/(.*?)$:', $this->repository, $matches);
        return $matches[1];
    }

    public function githubRepository()
    {
        preg_match(':github.com/(.*?)/(.*?)$:', $this->repository, $matches);
        return $matches[2];
    }
}
