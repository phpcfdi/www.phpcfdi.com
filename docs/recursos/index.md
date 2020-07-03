# Repositorios de recursos

Los repositorios de recursos son contenidos públicos, que hacemos disponibles en formatos estándares, para ser explotados
desde tus sistemas de información.

La necesidad de contar con estos recursos surge de alguna deficiencia de su publicador, por ejemplo: los formatos originales
suelen no estar disponibles, están en formato no estándar (como archivos de MS Excel), tienen deficiencias de estructura,
tienen deficiencias técnicas, etc.

!!! note
    Los recursos son libres de formato abierto. **No son específicos de PHP**.
    Los puedes usar desde cualquier lenguaje y cualquier sistema operativo.

## Listado de recursos

- [SAT XML](sat-xml.md)
- [Catálogos SAT](sat-catalogs.md)

## Generación de recursos

Los recursos están en un formato *original*, generalmente disponibles a través de internet y sin versionado.
Estos recursos originales son descargados y se *convierten* a un *formato generado*.

Los *formatos originales* generalmente son poco útiles para su procesamiento o consulta, como archivos de MS Excel
o archivos separados por comas. O contienen errores como errores de codificación UTF-8, ANSI, ISO8859-1, etc.
O no están 100% disponibles a través de internet. O contienen información no normalizada, etc.

Los *formatos generados* por otro lado, tienen el objetivo de estar correctamente estructurados, basados en estándares
abiertos, sin errores de coficiación, siempre disponibles y además con un control de cambios. Cada uno de los proyectos
define el *formato generado* adecuado dependiendo del tipo de recurso que se trata.

Los *formatos generados* son el resultado de tomar los *formatos originales* y transformarlos. Generalmente la licencia
de los *formatos originales* es ausente y/o se considera de dominio público. Dado lo anterior, recomendamos utilizar
la licencia [Unlicense](http://unlicense.org/) o la licencia [Libre uso MX](https://datos.gob.mx/libreusomx).
No recomendamos utilizar licencias que restrinjan el libre uso, la divulgación, la transformación o la corrección de
los datos, sobre todo previniendo el reclamo por parte de los creadores del *formato original*.

Mantener estos repositorios no es sencillo, sería casi imposible mantener actualizado un repositorio de forma manual,
por lo que las tareas de mantenimiento de los repositorios deben estar automatizadas.

La primera tarea de automatización consiste en crear el programa (*generador*) que hace la *conversión* del *formato original*
a el *formato generado*. Estos programas generadores pueden estar elaborados en cualquier lenguage y utilizar cualquier
tecnología, sin embargo preferiremos siempre generadores que sean libres, públicos y que se ejecuten sobre
sistemas operativos libres.

Debido a que los generadores pueden tener sus propios requerimientos muy variados, es altamente recomendado que corran
utilizando algún tipo de tecnología autocontenida (como `Docker` o `Vagrant`). Para que de esta forma su ejecución no
tenga grandes requerimientos de instalación sobre el programa que lo ejecuta.
