# Librerías de phpCfdi

En lugar de contar con una librería que haga muchas cosas preferimos pequeñas librerías
que realicen bien su trabajo y estén bien probadas.

La mayoría de las [librerías](listado-librerias.md) se encuentran en funcionamiento, a continuación se puede ver el
listado de librerías ordenado por si cuentan o no con una versión liberada y alfabéticamente.

## Compromiso de nuestras librerías

### Disponibilidad

Nuestras librerías se encuentran disponibles desde [`composer`](https://getcomposer.org/)

```shell
composer search phpcfdi
```

### Libertad

Nuestras librerías están bajo una licencia de código libre de tipo MIT o LGPL, lo
que te garantiza que las puedes utilizar en proyectos que también sean código libre
o con licencias privadas o ser usadas para propósitos comerciales.

### Versionado semántico

Nuestras librerías se apegan a versionado semántico, por lo que puedes utilizarlas
sin temor a romper tu aplicación por una actualización de versión.

En algunas librerías usamos versión mayor cero (`0.y.z`) lo que significa que aun no
existe una versión estable y las actualizaciones podrían romper tu implementación.

### Pruebas y cobertura de código

Buscaremos una cobertura de código de 100% y contar con pruebas unitarias,
de integración y/o de funcionamiento.

## Ideas en progreso

Estas librerías no tienen una versión oficial y para usarlas debes agregar el
repositorio a tu composer.json y usar una rama específica.

### `phpcfdi/timbrado`

La librería [`phpcfdi/timbrado`](https://github.com/phpcfdi/timbrado) permite timbrar
con diferentes PAC. Cuenta con los servicios básicos que debe ofrecer un PAC:

- Timbrar un PreCFDI (comprobante con sello pero sin timbre fiscal digital)
- Obtener un CFDI a partir de un PreCFDI.
- Presentar una solicitud de cancelación firmada
- Listar, autorizar y rechazar solicitudes de cancelación de CFDI

Aún está en etapa de planeación, y aunque se tiene una librería con ese nombre y propósito
no cuenta con ninguna versión liberada.

Para poder usar un PAC con esta librería se deberá crear un proyecto que sea capaz de cumplir
con las interfaces requeridas. Así que, por ejemplo si existiera un PAC llamado *Tu PAC MX* entonces
lo más probable es que exista un proyecto `phpcfdi/timbrado-tupacmx`, y que ese proyecto tenga
dentro de sus dependencias a `tupacmx/web-services-client-php` (o algo así).

### `phpcfd/finkok`

La librería [`phpcfdi/finkok`](https://github.com/phpcfdi/finkok) está hecha para trabajar con
todos los servicios web ofrecidos por el integrador (antes PAC) [Finkok](https://www.finkok.com).

No estamos asociados a ellos de ninguna forma, es un proyecto de phpCfdi porque muchos miembros de
la comunidad utilizan su servicio. En julio de 2019 Finkok perdió su registro como PAC y ahora integrador.

## Nuevas ideas

### `phpcfdi/cfdi-to-json`

Librería que permite la exportación de un CFDI a formato JSON, solucionando
el problema de los elementos que soportan múltiples instancias. Ejemplo:

```json
{
    "Comprobante" => {
        "Conceptos" => {
            "Concepto" => [
                {
                    "@NoIdentificacion" => "#Item01"
                }
            ]
        }
    }
}
```
