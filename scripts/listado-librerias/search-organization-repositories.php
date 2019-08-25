<?php

require __DIR__ . '/GitHub/ApiGetter.php';

exit(call_user_func(
    function (string $filename): int {
        $github = new GitHub\ApiGetter(strval(getenv('GH_USERNAME')), strval(getenv('GH_PASSWORD')));
        $repositories = $github->getOrganizationRepositories('phpcfdi');
        $repositories = array_map(
            function (array $repository) use ($github): array {
                $repository['github_name'] = $repository['name'];
                $repository['name'] = mb_strtolower($repository['full_name']);
                $repository['releases'] = $github->getRepositoryReleases($repository['full_name']);
                $repository['releases_count'] = count($repository['releases']);
                return $repository;
            },
            $repositories
        );
        $repositories = array_values($repositories);
        file_put_contents(
            $filename,
            json_encode(
                $repositories,
                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
            ) . PHP_EOL
        );
        return 0;
    },
    $argv[1] ?? 'php://stdout'
));
