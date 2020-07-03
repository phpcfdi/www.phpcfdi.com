# Recursos SAT XML

- Repositorio: <https://github.com/phpcfdi/resources-sat-xml>
- Generador: <https://github.com/phpcfdi/resources-sat-xml-generator>

Recursos de archivos XSD (XML Schema Definition) y XSLT (eXtensible Stylesheet Language) que el
[SAT (Servicio de Administración Tributaria)](http://www.sat.gob.mx/) en México ofrece para trabajar
con CFDI (Comprobante Fiscal Digital por Internet).

- Los archivos XSD son utilizados para validar los archivos XML de CFDI.

- Los archivos XSLT son utilizados para transformar los archivos XML de CFDI,
  esta transformación es útil al momento de generar la *cadena de origen* de los CFDI.

Los archivos contenidos son las descargas de todos los archivos XSD y XSLT listados en el listado de documentos técnicos
de CFDI y Complementos de CFDI publicado en [`phpcfdi/sat-ns-registry`](https://github.com/phpcfdi/sat-ns-registry).
Entre los que se incluyen los relacionados con CFDI 3.3, Timbre Fiscal Digital 1.1, Nómina 1.2, Comercio Exterior 1.1, etc.

Los archivos no son idénticos a los originales, esto es porque los archivos originales contienen referencias absolutas
a otros archivos, por ejemplo, `http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd` está vinculado con
`http://www.sat.gob.mx/sitio_internet/cfd/catalogos/catCFDI.xsd`. Al modificar los archivos para que tengan
inclusiones relativas en lugar de absolutas, el archivo `resources/www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd`
está vinculado al archivo `../catalogos/catCFDI.xsd` de forma relativa.

Gracias a la conversión de rutas absolutas a relativas no será necesario obtener recursos del exterior
y se pueden utilizar de forma local.

## Generador

El proceso de generación de los archivos contenidos en el repositorio se realiza gracias a
[`phpcfd/resources-sat-xml-generator`](https://github.com/phpcfdi/resources-sat-xml-generator) que a su vez utiliza
la librería [`eclipxe/xmlresourceretriever`](https://github.com/eclipxe13/XmlResourceRetriever) para poder extraer
todo el árbol de dependencias de los archivos XSD y XSLT.

## Licencia

La información dentro de este repositorio debe ser considerada de *dominio público*, dado que es una recopilación de
información pública generada por el [Servicio de Administración Tributaria (SAT)](https://www.sat.gob.mx/) de México.
Por lo anterior, se establece este repositorio con la licencia [Unlicense](http://unlicense.org/).
