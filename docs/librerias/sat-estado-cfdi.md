# Consulta de estado de CFDI

[![release](https://img.shields.io/github/release/phpcfdi/sat-estado-cfdi)](https://github.com/phpcfdi/sat-estado-cfdi/releases)
[![license](https://img.shields.io/github/license/phpcfdi/sat-estado-cfdi)](https://github.com/phpcfdi/sat-estado-cfdi/blob/master/LICENSE)
[![build](https://img.shields.io/travis/phpcfdi/sat-estado-cfdi/master)](https://travis-ci.org/phpcfdi/sat-estado-cfdi)
[![quality](https://img.shields.io/scrutinizer/g/phpcfdi/sat-estado-cfdi/master)](https://scrutinizer-ci.com/g/phpcfdi/sat-estado-cfdi/)
[![coverage](https://img.shields.io/scrutinizer/coverage/g/phpcfdi/sat-estado-cfdi/master)](https://packagist.org/packages/phpcfdi/sat-estado-cfdi)
[![packagist](https://img.shields.io/packagist/dt/phpcfdi/sat-estado-cfdi)](https://scrutinizer-ci.com/g/phpcfdi/sat-estado-cfdi/code-structure/master/code-coverage/src/)

Con la librería [phpcfdi/sat-estado-cfdi][packagist] podrás consultar el estado de un CFDI en
el Web Service del SAT.

La librería tiene la lógica para elaborar la consulta e interpretar la respuesta dándote objetos
amigables y entendibles. Sin embargo, no contiene la lógica de fabricar la consulta o consumo de HTTP.

## Datos de consulta: expresión

Tu puedes crear tu expresión, o leer la expresión desde el código QR de la representación impresa
de un CFDI. Pero si lo que necesitas es fabricar la consulta a partir de un CFDI (o de datos conocidos)
puedes usar [phpcfdi/cfdi-expresiones](cfdi-expresiones.md), que hace exactamente esa tarea.

## Consumidores de servicio (HTTP/SOAP Clients)

Puedes crear tu propio consumidor o utilizar alguno de los consumidores oficiales:

- [phpcfdi/sat-estado-cfdi-soap](https://github.com/phpcfdi/sat-estado-cfdi-soap):

  Consume el webservice haciendo una llamada SOAP (sin WSDL) para obtener el resultado.

- [phpcfdi/sat-estado-cfdi-http-psr](https://github.com/phpcfdi/sat-estado-cfdi-http-psr)

  Consume el webservice haciendo una HTTP utilizando objetos de PSR-7, PSR17 y PSR18 *que tu provees*.

[packagist]: https://packagist.org/packages/phpcfdi/sat-estado-cfdi
