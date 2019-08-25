# Validación de certificados

El SAT maneja la identidad de sus contribuyentes y sus CFDI a través del uso de
certificados y llaves privadas donde el SAT es la propia entidad certificadora.

El uso de esta tecnología no es nuevo, se utiliza todos los días al intentar
conectarte usando una dirección como `https://example.com`.

El problema radica en que es el propio SAT quien hace el papel de autoridad
certificadora, con lo que es él quien puede emitir pares de certificados y llaves
y a su vez es él quien puede revocarlos.

Sin embargo, ==no tiene en modo público== un servicio para que nosotros consultemos
si un certificado ha sido revocado. Esto se hace con la implementación del protocolo
**OCSP (Online Certificate Status Protocol)**, pero para poder obtener acceso a este
servicio nos piden registrarnos y al parecer solo está disponible para agencias de gobierno.

* SAT registro OCSP:
  <https://www.gob.mx/cms/uploads/attachment/file/36607/ANEXO-UNICO_Req-de-uso-de-OCSP.pdf>

Con esto nos dejan en el problema de no poder validar el estado de nuestra propia
eFirma/FIEL o nuestros sellos/CSD. Ojalá y la autoridad recapacite y al entender
que se trata de una necesidad pública nos permita usarla libremente.
