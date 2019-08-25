# Consumo del Servicio Web del SAT para descarga masiva

[![release](https://img.shields.io/github/release/phpcfdi/sat-ws-descarga-masiva)](https://github.com/phpcfdi/sat-ws-descarga-masiva/releases)
[![license](https://img.shields.io/github/license/phpcfdi/sat-ws-descarga-masiva)](https://github.com/phpcfdi/sat-ws-descarga-masiva/blob/master/LICENSE)
[![build](https://img.shields.io/travis/phpcfdi/sat-ws-descarga-masiva/master)](https://travis-ci.org/phpcfdi/sat-ws-descarga-masiva)
[![quality](https://img.shields.io/scrutinizer/g/phpcfdi/sat-ws-descarga-masiva/master)](https://scrutinizer-ci.com/g/phpcfdi/sat-ws-descarga-masiva/)
[![coverage](https://img.shields.io/scrutinizer/coverage/g/phpcfdi/sat-ws-descarga-masiva/master)](https://packagist.org/packages/phpcfdi/sat-ws-descarga-masiva)
[![packagist](https://img.shields.io/packagist/dt/phpcfdi/sat-ws-descarga-masiva)](https://scrutinizer-ci.com/g/phpcfdi/sat-ws-descarga-masiva/code-structure/master/code-coverage/src/)

Con la librería [phpcfdi/sat-ws-descarga-masiva][packagist] podrás consumir de manera
sencilla el [Servicio Web del SAT de Descarga Masiva][ws-sat].

Esta librería ofrece todo lo que necesitas para poder presentar solicitudes de descarga
de información (CFDI o Metadata), verificar el estado de la solicitud, hacer la descarga
y hasta cuenta con una utilería para leer los contenidos de los archivos ZIP descargados.

En cada una de las peticiones utiliza la eFirma/FIEL y es capaz de distinguir si se trata
de un Certificado de Sello Digital/CSD. Su uso está restringido a firmar los mensajes XML
acorde a la documentación técnica del SAT y tu llave privada nunca es compartida.

[packagist]: https://packagist.org/packages/phpcfdi/sat-ws-descarga-masiva
[ws-sat]: https://www.sat.gob.mx/consultas/42968/consulta-y-recuperacion-de-comprobantes-(nuevo)
