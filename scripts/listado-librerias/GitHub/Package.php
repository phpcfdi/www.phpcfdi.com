<?php

namespace GitHub;

class Package
{
    public $name;
    public $description;
    public $ghLink;
    public function __construct($name, $description)
    {
        if ('' === $name) {
            throw new RuntimeException('Cannot create a Package without name');
        }
        $this->name = $name;
        $this->description = $description;
    }

    public function release(): string
    {
        return $this->component('release', $this->ghLink('releases'), $this->badge('github/release', ''));
    }

    public function license(): string
    {
        return $this->component('license', $this->ghLink('blob/master/LICENSE'), $this->badge('github/license'));
    }

    public function build(): string
    {
        $link = sprintf('https://travis-ci.org/%s', $this->name);
        return $this->component('build', $link, $this->badge('travis', '/master'));
    }

    public function quality(): string
    {
        $link = sprintf('https://scrutinizer-ci.com/g/%s/', $this->name);
        return $this->component('quality', $link, $this->badge('scrutinizer/g', '/master'));
    }

    public function coverage(): string
    {
        $link = sprintf('https://packagist.org/packages/%s', $this->name);
        return $this->component('coverage', $link, $this->badge('scrutinizer/coverage/g', '/master'));
    }

    public function packagist(): string
    {
        $link = sprintf('https://scrutinizer-ci.com/g/%s/code-structure/master/code-coverage/src/', $this->name);
        return $this->component('packagist', $link, $this->badge('packagist/dt'));
    }

    public function ghLink(string $path): string
    {
        return sprintf('https://github.com/%s/%s', $this->name, $path);
    }

    private function badge(string $type, string $suffix = ''): string
    {
        // https://img.shields.io/github/release/phpcfdi/credential
        return sprintf('https://img.shields.io/%s/%s%s', $type, $this->name, $suffix);
    }

    private function component(string $label, string $link, string $badge): string
    {
        return sprintf("[![%s](%s)](%s)", $label, $badge, $link);
    }
}
