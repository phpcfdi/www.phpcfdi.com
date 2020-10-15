# Blog 2020

## Octubre

### Actualización mayor de `phpcfdi/sat-ws-descarga-masiva`

Hemos trabajado en la actualización de la librería que consume el servicio de descarga masiva del SAT
[`phpcfdi/sat-ws-descarga-masiva`](https://github.com/phpcfdi/sat-ws-descarga-masiva).

Con esta actualización se rompe la compatibilidad mayor, por lo que se ha cambiado la versión de `0.3` a `0.4`. Esto
no representa un problema si en tu `composer.json` tienes la dependencia como `"phpcfdi/sat-ws-descarga-masiva": "^0.3"`.

Con este cambio nos acercamos cada vez más a la primera versión estable.
Aún quedan dos nuevas características por solucionar.

Algunas ligas importantes para actualizarte:

- Pull request: <https://github.com/phpcfdi/sat-ws-descarga-masiva/pull/31>
- Rama de trabajo: <https://github.com/eclipxe13/sat-ws-descarga-masiva/blob/v0.4/dev/docs/UPGRADE_0.3_0.4.md>
- Nuevo README: <https://github.com/eclipxe13/sat-ws-descarga-masiva/blob/v0.4/dev/docs/README.md>

### CCOSS Reconocimientos

A [Carlos C Soto @eclipxe](https://twitter.com/eclipxoide) lo nominaron en la
[Cumbre de Contribuidores de Open ource Software (CCOSS)](https://ccoss.org/awards/)
por sus contribuciones a este proyecto y por ayudar a otras personas a contribuir
a proyectos de software libre. *Felicidades @eclipxe*.

## Julio

### Actualizando el sitio

Pues he olvidado muchas cosas con la cuarentena, entre ellas, cómo generar el sitio usando `mkdocs` y `mkdocs-material`.
Si ven este mensaje es porque al fin lo logré.

## Junio

### Recursos

He comenzado con los primeros pasos de lo que espero sea un proyecto sólido: Mantener los recursos del SAT
en repositorios de GitHub para poderlos explotar.

Algunos de estos recursos podrían ser:

- Catálogos de CFDI
- Archivos XSD y XSLT de CFDI
- Listas negras del SAT
- Catálogo nacional de códigos postales de SEPOMEX

La idea que hemos discutido en el canal de discord consiste en varias partes:

- Para cada recurso, se necesita un repositorio de almacenamiento y un repositorio para el programa que lo genera.
- Un sistema de ejecución continua que permita ejecutar esos programas, generar la información, compararla,
  actualizar el repositorio de almacenamiento en caso de ser necesario y almacenar las corridas.
- Otro sistema para poder notificar vía email o webhook acerca de un repositorio actualizado.

Cada una de estas partes requiere de bastante esfuerzo, así que hay que ir poniendo las primeras piedras
y avanzando poco a poco en la tarea.

## Mayo

### Fallas contínuas del SAT

En el grupo de discord han reportado varias fallas al momento de obtener los archivos del SAT de XML (XSD y XSLT).
Al parecer el servicio de AWS CloudFront que tiene contratado el SAT o está mal configurado o está mal usado,
yo le voy más a la última opción.

Esto ha llevado a diversas fallas, desde no poder completar los builds de `CfdiUtils` hasta no poder crear CFDI
por no poder obtener las versiones más recientes de los archivos XSLT necesarios para las cadenas de origen.
O no poder validar CFDI recibidos por indisponibilidad de los XSD.

Si bien es cierto que `CfdiUtils` almacena localmente estos recursos, también es cierto que este almacén se debe
actualizar cada cierto tiempo. Así que tarde o temprano alguien se verá afectado por la indisponibilidad de los
reursos. Al menos esta situación ha traido cierta conciencia en los usuarios de la librería de la necesidad de
[configurar el almacenamiento local](https://cfdiutils.readthedocs.io/es/latest/componentes/xmlresolver/).
