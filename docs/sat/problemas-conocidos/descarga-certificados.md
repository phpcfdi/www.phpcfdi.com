# Descarga de certificados desde el SAT

**2019-10-24**: Al parecer el problema descrito en este artículo está resuelto.
Seguiremos revisando para establecerlo.

Es necesario descargar los certificados de los PAC para poder validar el atributo `SelloCFDI`
del nodo `tfd:TimbreFiscalDigital` porque no viene incluido en la estructura.

Para poderlos descargar se contacta al servidor del SAT <https://rdc.sat.gob.mx/>

El problema es que a partir de 2018-09-12 en el servidor `rdc.sat.gob.mx` el servidor web retorna certificados
para el protocolo `https` vigentes y expirados:

- Expirado: `4D:CE:6C:8E:0D:C6:4C:E3` vigente hasta `2018-09-22 16:07:04 GMT`
- Vigente: `00:A7:06:AA:42:44:4E:E4:E9:00:00:00:00:58:08:91:5B` vigente hasta `2020-09-12 16:41:28 GMT`

No hay una tendencia, de una muestra de 1,000 descargas realizada el `2018-10-17 17:30 GMT-5` el resultado fue
incorrectas 2,853 (28.53%) y correctas 7,147 (71.47%) por lo que la posibilidad de obtener un certificado incorrecto
es cercana al 30%.

Como resultado, la conexión segura al servidor no se puede establecer y esto generará que falle
el proceso de descarga del certificado.

Personalmente no recomiendo desabilitar la seguridad del protocolo HTTPS, pero es una posible solución.
