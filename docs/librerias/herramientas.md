# Herramientas comúnmente usadas

Usamos [GitHub](https://github.com) para almacenar nuestros repositorios de git,
administrar tickets y lanzar ejecuciones a otras plataformas de integración contínua.

Usamos [Travis CI](https://travis-ci.org/) para integración contínua, desde esta plataforma
probamos que nuestro código sea compatible con las diferentes versiones de PHP.

Usamos [Scrutinizer CI](https://scrutinizer-ci.com/) para análisis de código,
mostrar la cobertura de código y *code intelligence* (hace que se pueda seguir el código en GitHub).

Usamos [Packagist](https://packagist.org/) para publicar nuestras librerías y que estén
disponibles a través de composer.

Te recomendamos utilizar [PhpStorm](https://www.jetbrains.com/phpstorm/) como IDE de desarrollo,
aunque es un software propietario tiene una versión llamada EAP que te permite utilizar esta
herramienta de forma gratuita.

Para revisar y corregir el estilo del código usamos
[`phpcs` & `phpcbf`](https://github.com/squizlabs/PHP_CodeSniffer) y
[`php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

Usamos [PHPUnit](https://phpunit.de/) para nuestras pruebas y analizar la cobertura de código.

Usamos [PHPStan](https://github.com/phpstan/phpstan) para analizar nuestro código y descubrir bugs.
