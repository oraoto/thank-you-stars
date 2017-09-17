<?php

namespace Oraoto\ThankYouStars;

class Program
{

    private $github;

    public function run($args)
    {
        if (count($args) < 2) {
            exit('Please specify project root');
        }
        $projectPath = $args[1];

        $github = Github::loadFromConfig();
        if (!$github) {
            exit("Failed to load token from ~/.thank-you-stars.json");
        }
        $this->github = $github;

        $composer = $this->loadComposerJSON($projectPath . './composer.json');
        if (isset($composer['require'])) {
            $this->starPackages(array_keys($composer['require']));
        }
        if (isset($composer['require-dev'])) {
            $this->starPackages(array_keys($composer['require-dev']));
        }
    }

    private function loadComposerJSON($path)
    {
        $content = @json_decode(file_get_contents($path), true);
        if (!$content) {
            return [];
        }
        return $content;
    }

    private function starPackages($packageNames)
    {
        foreach ($packageNames as $name) {
            $package = Packagist::findPackage($name);
            if (!$package || !$package->isGithubRepository()) {
                continue;
            }
            $succ = $this->github->starRepository(
                $package->githubOwner(),
                $package->githubRepository()
            );
            if ($succ) {
                echo 'Starred! ' . $package->repository . PHP_EOL;
            }
        }
    }
}