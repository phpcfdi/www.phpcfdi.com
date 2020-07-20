# Contribuciones a phpCfdi

El software que se genera en esta organización es mayormente software libre y está disponible para ser modificado
por la comunidad, tanto para sus oropios propósitos como para el bien común.

Si deseas contribuir en alguno de nuestros proyectos te invitamos a que nos cuentes la idea que tienes en el
canal de [Discord `#phpcfdi`](https://discord.gg/aFGYXvX). O si lo deseas puedes simplemente abrir un *Issue*
o un *Pull Request* en el repositorio de GitHub del proyecto de tu interés.

Si no tienes una idea en concreto pero te gustaría contribuir considera estas opciones:

- Algún *issue* abierto en [nuestras librerías](../librerias/index.md).
- El desarrollo de algún [proyecto de phpCfdi](../proyectos/index.md).

## Ayuda requerida

### Generación contínua de recursos

En la sección de [Recursos](../recursos/index.md) hay una gran oportunidad de mejora, al menos en julio/2020 hace
falta muchas cosas como:

- Agregar el recurso de listas negras del SAT.
- Agregar el recurso de códigos postales de SEPOMEX.
- Certificados de pruebas y producción del SAT para verificar CSD/FIEL.
- Crear la interfaz gráfica para visualizar las construcciones de los recursos *(en progreso)*.
- Contactar a otras comunidades y proyectos que regularmente usan estos recursos pero no tienen
  automatizada la actualización de los mismos.

## Verificador de certificados del SAT

Los certificados del SAT pueden ser verificados contra los certificados raíz y así asegurar que el certificado
fue emitido por el SAT. Como el SAT no ofrece el servicio para hacerlo de forma pública, es necesario entonces
verificarlos contra los certificados raíz.

Se puede leer más al respecto en la librería `phpcfdi/credentials` en
<https://github.com/phpcfdi/credentials/blob/master/docs/VerificacionCertificadosSAT.md>.

Lamentablemente no hay una forma pública para saber si un certificado ha sido revocado.

### Usar GitHub Actions

Nos gustaría entender y posiblemente migrar nuestro proceso de *Continuous Integration* de *Travis-CI* a *GitHub Actions*.
Queremos saber las ventajas y desventajas de hacer esto y cómo podría mejorar nuestro proceso con este cambio.

### Planificación de `CfdiUtils 3.0`

La librería de [CfdiUtils 2.0](../librerias/cfdiutils.md), tiene varios inconvenientes:

*Soporte PHP 7.0*. Nos gustaría que soportara menor la versión activa, con los cambios en el código que sean
necesarios para aprovechar mejor el lenguaje. Esto significa también versiones actualizadas de las
herramientas de desarrollo como `PHPUnit` y `PHPStan`.

*Monolito*. La librería tiene muchas responsabilidades, lo mejor sería que sus responsabilidades se redujeran
y que estuviera recargada en otras librerías específicas, como `phpcfd/credentials`, `phpcfd/rfc`, etc.

Este planificación incluye el cambio de `eclipxe/cfdiutils` a `phpcfdi/cfdiutils`, con la modificación
del espacio de nombres.

Es probable que de esta planificación se desprendan otras librerías que valga la pena aislar y mejorar,
como la limpieza de CFDI a un proyecto independiente `phpcfdi/cfdi-cleaner`, o posiblemente las
validaciones a `phpcfdi/cfdi-validate`.

### Catálogos CFDI en PHP

Desde el 2019 hemos intentado contar con una forma sencilla de consumir los catálos del SAT desde PHP,
lo que es todo un reto por la propia naturaleza en que los catálogos del SAT son publicados.

Reciéntemente se ha logrado distribuir en dos proyectos diferentes la extracción de los catálogos
a una base de datos [phpcfdi/sat-catalogos-populate](https://github.com/phpcfdi/sat-catalogos-populate)
y la propia información [phpcfdi/resources-sat-catalogs](https://github.com/phpcfdi/resources-sat-catalogs).

Ahora es necesario actualizar [phpcfdi/sat-catalogos](https://github.com/phpcfdi/sat-catalogos) y
así contar con una librería actualizada, sincronizada y disponible en PHP. Este es un proyecto
que requiere de mucho cariño y esfuerzo.

## Otras contribuciones

Puedes [reportar un problema](reportar-problemas.md) y así ayudarnos a mejorar.

También puedes compartirnos ejemplos de uso.

Todos tenemos habilidades y experiencias para contribuir, algunas de estas competencias son útiles
en proyectos de software libre, que no se limitan sólo a un montón de código en repositorios.
Ayuda desde participar en la comunidad y comentar tu perspectiva en nuestro canal
de [Discord `#phpcfdi`](https://discord.gg/aFGYXvX) o en [Twitter `@phpcfdi`](https://twitter.com/phpcfdi).
