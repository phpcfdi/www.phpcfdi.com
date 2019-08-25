# Credenciales

[![release](https://img.shields.io/github/release/phpcfdi/credentials)](https://github.com/phpcfdi/credentials/releases)
[![license](https://img.shields.io/github/license/phpcfdi/credentials)](https://github.com/phpcfdi/credentials/blob/master/LICENSE)
[![build](https://img.shields.io/travis/phpcfdi/credentials/master)](https://travis-ci.org/phpcfdi/credentials)
[![quality](https://img.shields.io/scrutinizer/g/phpcfdi/credentials/master)](https://scrutinizer-ci.com/g/phpcfdi/credentials/)
[![coverage](https://img.shields.io/scrutinizer/coverage/g/phpcfdi/credentials/master)](https://packagist.org/packages/phpcfdi/credentials)
[![packagist](https://img.shields.io/packagist/dt/phpcfdi/credentials)](https://scrutinizer-ci.com/g/phpcfdi/credentials/code-structure/master/code-coverage/src/)

Con la librería [phpcfdi/credentials][packagist] podrás trabajar con los archivos CSD y FIEL del SAT.
De esta forma, se simplifica el proceso de firmar, verificar firma y obtener datos particulares del
archivo de certificado así como de la llave pública.

* El CSD (Certificado de Sello Digital) es utilizado para firmar Comprobantes Fiscales Digitales.
* La FIEL (o eFirma) es utilizada para firmar electrónicamente documentos (generalmente usando XML-SEC)
  y está reconocida por el gobierno mexicano como una manera de firma legal de una persona física o moral.

Actualmente la librería [phpcfd/sat-ws-descarga-masiva](sat-ws-descarga-masiva.md)
y la librería [phpcfd/xml-cancelacion](xml-cancelacion.md) dependen de este proyecto.

[packagist]: https://packagist.org/packages/phpcfdi/credentials
