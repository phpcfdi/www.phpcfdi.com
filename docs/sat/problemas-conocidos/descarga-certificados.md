# Descarga de certificados desde el SAT

Es necesario descargar los certificados de los PAC para poder validar el atributo `SelloCFDI`
del nodo `tfd:TimbreFiscalDigital` porque no viene incluido en la estructura.

Para poderlos descargar se contacta al servidor del SAT <https://rdc.sat.gob.mx/>.

## Conectividad por seguridad TLS

**2019-07-18**: Al parecer el problema descrito a continuación está resuelto.

En algún momento a inicios de 2020 el servicio web en <https://rdc.sat.gob.mx/> falla al establecer la comunicación.
Después de depurar el problema, parece que el servidor web que responde en `rdc.sat.gob.mx` *delega* la conexión
a alguno de al menos cuatro servidores: `CL-vordel01`, `CL-vordel02`, `CL-vordel03` y `CL-vordel04`. Y sucede que
algunos de estos servidores no tienen correctamente activada la seguridad TLS.

Según la siguiente prueba de concepto:

```shell
# success rate: 100%
curl --tls-max 1.0 --tlsv1.0 -s -o /dev/null https://rdc.sat.gob.mx/rccf/000010/000004/06/25/80/00001000000406258094.cer

# success rate: 40%
curl --tls-max 1.1 --tlsv1.1 -s -o /dev/null https://rdc.sat.gob.mx/rccf/000010/000004/06/25/80/00001000000406258094.cer

# success rate: 56%
curl --tls-max 1.2 --tlsv1.2 -s -o /dev/null https://rdc.sat.gob.mx/rccf/000010/000004/06/25/80/00001000000406258094.cer

# success rate: 0%
curl --tls-max 1.3 --tlsv1.3 -s -o /dev/null https://rdc.sat.gob.mx/rccf/000010/000004/06/25/80/00001000000406258094.cer

# success rate: 58%
curl --tls-max 1.2 -s -o /dev/null https://rdc.sat.gob.mx/rccf/000010/000004/06/25/80/00001000000406258094.cer
```

Podemos sacar algunas conclusiones:

- Solo la seguridad TLSv1.0 entrega resultados positivos. TLSv1.0 está deprecado desde 2008.
- No tienen activa la seguridad TLSv1.3, que es la recomendada desde 2020.
- Al depurar la comunicación, degradar desde TLSv1.3 o TLSv1.2 a veces lleva a el error
  `error:1425F102:SSL routines:ssl_choose_client_version:unsupported protocol`.
- Los servidores que no reportan el error anterior y permiten la degradación son `CL-vordel03` y `CL-vordel04`.
- Podemos suponer entonces que `CL-vordel01` y `CL-vordel02` tienen problemas de configuración.

En resumen, el SAT no tiene correctamente configurado este servicio y está generando problemas para obtener certificados
y comprobar las firmas de los Timbres Fiscales Digitales.

Una posible solución podría ser reintentar por al menos 6 veces obtener el certificado en caso de que requiera descargar
desde `https://rdc.sat.gob.mx/`. Otra posible solución sería forzar a TLSv1.0 pero no lo recomiendo.

## Problemas de caducidad de certificados

**2019-10-24**: Al parecer el problema descrito a continuación está resuelto.

El problema es que a partir de 2018-09-12 en el servidor `rdc.sat.gob.mx` el servidor web retorna certificados
para el protocolo `https` vigentes y expirados:

- Expirado: `4D:CE:6C:8E:0D:C6:4C:E3` vigente hasta `2018-09-22 16:07:04 GMT`
- Vigente: `00:A7:06:AA:42:44:4E:E4:E9:00:00:00:00:58:08:91:5B` vigente hasta `2020-09-12 16:41:28 GMT`

No hay una tendencia, de una muestra de 10,000 descargas realizada el `2018-10-17 17:30 GMT-5` el resultado fue
incorrectas 2,853 (28.53%) y correctas 7,147 (71.47%) por lo que la posibilidad de obtener un certificado incorrecto
es cercana al 30%.

Como resultado, la conexión segura al servidor no se puede establecer y esto generará que falle
el proceso de descarga del certificado.

Personalmente no recomiendo desabilitar la seguridad del protocolo HTTPS, pero es una posible solución.
