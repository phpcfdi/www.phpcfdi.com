# Proyectos de phpCfdi

## Monetización de los proyectos de la organización phpCfdi

Crear software (libre o privado) no es sencillo ni barato. Sin sacrificar nuestro compromiso
con el software libre, estamos pensando en formas de monetización en nuestra organización que
nos permitan tener desarrolladores dedicados a nuestros proyectos.

### Posibles formas de monetización

- [ ] Donaciones, patrocinio de proyectos.
- [ ] Ofrecer software como servicio, utilizable a través de una plataforma web y conectable con
  otros sistemas usando servicios web.
- [ ] Ofrecer servicios de consultoría en facturación electrónica o la implementación de nuestros
  proyectos dentro de su propia infrestutura.

## Proyectos en marcha

### Catálogos de CFDI

El SAT publica diferentes catálogos en diferentes formatos. Algunos en archivos XLS y otros en PDF.
Además, estos catálogos cuentan con información vigente en un periodo de tiempo.
Los catálogos no son simples e interpretarlos para después exponerlos como objetos
tiene una gran dificultad.

Para generar los catálogos en un formato entendible (SQL) se ha implementado [Recursos / Catálogos SAT](../recursos/sat-catalogs.md).

Para poder utilizarlos se está trabajando en la librería [`phpcfdi/sat-catalogos`](https://github.com/phpcfdi/sat-catalogos),
que expone estos catálogos como una librería de PHP.

## Ideas de nuevos proyectos

### API de CFDI

Deseamos poveer una API de CFDI que permita ofrecer un servicio gratuito (de consumo responsable)
que permita hacer las funciones principales de trabajo con CFDI, por ejemplo:

- Validar un CFDI y generar el reporte de validación
- Generar un PDF genérico de un CFDI
- Consultar el listado de LIRFC

### API de RFC inscritos no cancelados

Lo que se busca en esta API es contar con una versión actualizada de la LIRC que se pueda
consultar por medio de REST. La tarea no es sencilla porque requiere de gran cantidad de
espacio y un volúmen de información gigantesco.

### SaaS Buzón de facturas

Saas (Software as a Service) de recepción de CFDI. Con este servicio las empresas pueden ofrecer
un buzón de recepción de facturas, este buzón puede funcionar con varias entradas: API de publicación,
página web de publicación, correo electrónico, carpetas remotas (como Dropbox o Google Drive), etc.

Una vez que se ha recibido un comprobante se valida en forma individual y contra la base de datos
de comprobantes conocidos (por ejemplo, cuando un complemento de pagos hace referencia a otros documentos).

A su vez puede proveer de funcionalidades únicas, por ejemplo: la vinculación de un CFDI con otro,
la consolidación de las cuentas por pagar, auditar cómo un comprobante fue pagado, planeación de pagos futuros, etc.

### SaaS Descarga Masiva

Saas (Software as a Service) de Descarga Masiva es un Web Service que extrae la lógica que
necesitan las empresas para obtener toda la información de CFDI de los Web Services del SAT
de descarga masiva tanto de comprobantes emitidos como de comprobantes recibidos.

La parte fundamental es que trabaje de forma automática, recuperando los CFDI, validando
periódicamente si un CFDI pasado ha sido cancelado, y lanzando eventos y notificaciones
distribuidas cada que un evento observable haya ocurrido.

La principal problemática es que para funcionar requiere poder contar con firmas generadas
por eFirma/FIEL. Se puede solucionar requiriendo un servicio automatizado de timbrado que se
instale en la infrestuctura del cliente y permita de manera segura generar las firmas para
consultar a los servicios web del SAT. También se puede solucionar subiendo a la aplicación
el certificado y la llave privada, pero esta definitivamente no es la mejor alternativa.

