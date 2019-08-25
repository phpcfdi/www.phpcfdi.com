# Expresiones de CFDI

[![release](https://img.shields.io/github/release/phpcfdi/cfdi-expresiones)](https://github.com/phpcfdi/cfdi-expresiones/releases)
[![license](https://img.shields.io/github/license/phpcfdi/cfdi-expresiones)](https://github.com/phpcfdi/cfdi-expresiones/blob/master/LICENSE)
[![build](https://img.shields.io/travis/phpcfdi/cfdi-expresiones/master)](https://travis-ci.org/phpcfdi/cfdi-expresiones)
[![quality](https://img.shields.io/scrutinizer/g/phpcfdi/cfdi-expresiones/master)](https://scrutinizer-ci.com/g/phpcfdi/cfdi-expresiones/)
[![coverage](https://img.shields.io/scrutinizer/coverage/g/phpcfdi/cfdi-expresiones/master)](https://packagist.org/packages/phpcfdi/cfdi-expresiones)
[![packagist](https://img.shields.io/packagist/dt/phpcfdi/cfdi-expresiones)](https://scrutinizer-ci.com/g/phpcfdi/cfdi-expresiones/code-structure/master/code-coverage/src/)

Con la librería [phpcfdi/cfdi-expresiones][packagist] podrás generar expresiones
de CFDI 3.3, CFDI 3.2 y RET 1.0.

Las expresiones son pequeñas representaciones de la factura que el SAT requiere que se
establezcan dentro de la representación impresa de un CFDI, últimamente como códigos QR.

Las expresiones *no son direcciones de internet*, aunque lo parezcan. Y tienen su lógica
de creación dependiento de la versión del documento.

Esta expresión es obligatoria para poder hacer uso del Webservice del SAT para consulta de
el estado de un CFDI.

Cuando tienes el CFDI en formato XML, esta librería es útil para generar el código QR
o para consumir el servicio web de estado de un comprobante.

[packagist]: https://packagist.org/packages/phpcfdi/cfdi-expresiones
