# XML para cancelación de CFDI

[![release](https://img.shields.io/github/release/phpcfdi/xml-cancelacion)](https://github.com/phpcfdi/xml-cancelacion/releases)
[![license](https://img.shields.io/github/license/phpcfdi/xml-cancelacion)](https://github.com/phpcfdi/xml-cancelacion/blob/master/LICENSE)
[![build](https://img.shields.io/travis/phpcfdi/xml-cancelacion/master)](https://travis-ci.org/phpcfdi/xml-cancelacion)
[![quality](https://img.shields.io/scrutinizer/g/phpcfdi/xml-cancelacion/master)](https://scrutinizer-ci.com/g/phpcfdi/xml-cancelacion/)
[![coverage](https://img.shields.io/scrutinizer/coverage/g/phpcfdi/xml-cancelacion/master)](https://packagist.org/packages/phpcfdi/xml-cancelacion)
[![packagist](https://img.shields.io/packagist/dt/phpcfdi/xml-cancelacion)](https://scrutinizer-ci.com/g/phpcfdi/xml-cancelacion/code-structure/master/code-coverage/src/)

Con la librería [phpcfdi/xml-cancelacion][packagist] podrás crear una
solicitud de cancelación acorde al SAT. Esta solicitud está descrita
en el Anexo 20, y solo se puede presentar a través de un PAC.

La solicitud de cancelación tiene las mismas características de un documento firmado:
no puede ser manipulada, no puede ser repudiada, permite identificar la identidad del emisor.

Para esto (igual que el CFDI) se genera un texto que contiene el mensaje a firmar
y después se utiliza tu llave privada de un Certificado de Sello Digital/CSD para firmarlo.

Algunos PAC ofrecen métodos de cancelación que recaen en la fabricación de esta firma,
de esta manera no es necesario compartir el certificado ni la llave privada con el PAC.

- Siempre que tu PAC ofrezca un método de cancelación basado en el XML deberías usarlo.
- Si tu PAC no lo ofrece entonces deberías solicitárselo.
- Nunca compartas tu llave privada de firmado de CFDI con nadie, ni con tu PAC.

Para evitar compartir tu llave privada, entonces debes tu generar el mensaje firmado,
pero el SAT implementó la solicitud utilizando un estándar -que no es tan simple como
el de cadena de origen que usa en CFDI-, en su lugar usa XMLSEC.

[phpcfdi/xml-cancelacion][packagist] tiene todo el código necesario para elaborar la
solicitud firmada, por lo que solo le debes dar tu certificado, llave privada y UUID
que deseas cancelar. Una vez con la solicitud elaborada preséntala con tu PAC para que
a su vez él la presente con el SAT.

[packagist]: https://packagist.org/packages/phpcfdi/xml-cancelacion
