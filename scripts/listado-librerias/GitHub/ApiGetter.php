<?php

namespace GitHub;

use stdClass;

class ApiGetter
{
    /** @var string */
    public $authorization;

    public function __construct(string $username = '', string $password = '')
    {
        $authorization = '';
        if ('' !== $username && '' !== $password) {
            $authorization = 'Authorization: Basic ' . base64_encode(sprintf('%s:%s', $username, $password));
        }
        $this->authorization = $authorization;
    }

    public function getOrganizationRepositories(string $organization): array
    {
        return $this->get(sprintf('https://api.github.com/orgs/%s/repos', $organization));
    }

    public function getRepositoryReleases(string $repository): array
    {
        return $this->get(sprintf('https://api.github.com/repos/%s/releases', $repository));
    }

    public function get(string $url): array
    {
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => array_filter([
                    'User-Agent: PHP',
                    'Accept: application/vnd.github.v3+json',
                    $this->authorization
                ]),
            ]
        ]);
        $content = strval(file_get_contents($url, false, $context));
        if ('' === $content) {
            return (object) [];
        }
        return json_decode($content, true);
    }
}
