# Recurso de Catálogos CFDI del SAT

- Repositorio: <https://github.com/phpcfdi/resources-sat-catalogs>
- Generador: <https://github.com/phpcfdi/sat-catalogos-populate>

Este repositorio contiene la información de los **Catálogos de CFDI** que el [Servicio de Administración Tributaria (SAT)](http://www.sat.gob.mx/) expone como archivos XLS (MS Excel), pero transformados a una base de datos de tipo SQLite3.

Los catálogos que se incluyen son:

- Catálogos de CFDI 3.3
- Catálogos de complemento de Pagos 1.1
- Catálogos de complemento de Nóminas 1.1
- Catálogos de complemento de Comercio Exterior 1.1

Se eligió el formato SQLite3 porque algunos de los catálogos son extremadamente grandes y otros formatos como XML o JSON
representarían un alto consumo de memoria o una lectura de información muy lenta.

Existe una iniciativa para explotar activamente esta base de datos a través de la librería [`phpcfdi/sat-catalogos`](https://github.com/phpcfdi/sat-catalogos).

## Generador

El proceso de generación de los archivos contenidos en el repositorio se realiza gracias a
[`phpcfd/sat-catalogos-populate`](https://github.com/phpcfdi/sat-catalogos-populate), sin embargo este solo crea
el archivo de base de datos, la generación de los archivos finales se hace utilizando una serie de scripts.

## Licencia

La información dentro de este repositorio debe ser considerada de *dominio público*, dado que es una recopilación de
información pública generada por el [Servicio de Administración Tributaria (SAT)](https://www.sat.gob.mx/) de México.
Por lo anterior, se establece este repositorio con la licencia [Unlicense](http://unlicense.org/).
