<?php

require __DIR__ . '/GitHub/Package.php';

use GitHub\Package;

exit(call_user_func(
    function (string $filename): int {
        $printer = function (Package $package) {
            return implode(PHP_EOL, [
                sprintf("**[`%s`](%s)**", $package->name, $package->ghLink('')),
                '',
                $package->release(),
                $package->license(),
                $package->build(),
                $package->quality(),
                $package->coverage(),
                $package->packagist(),
                '',
                '> ' . $package->description,
                '',
            ]);
        };
        if ('-' === $filename) {
            $filename = 'php://stdin';
        }
        $packages = json_decode(file_get_contents($filename), true);
        uasort($packages, function (array $first, array $second): int {
            return (boolval($second['releases_count']) <=> boolval($first['releases_count']))
                ?: ($first['name'] <=> $second['name']);
        });
        $packages = array_map(
            function (array $package): Package {
                return new Package($package['name'], $package['description']);
            },
            $packages
        );
        echo "# Listado de librerías\n\n", implode("\n---\n\n", array_map($printer, $packages)), PHP_EOL;
        return 0;
    },
    $argv[1] ?? ''
));
