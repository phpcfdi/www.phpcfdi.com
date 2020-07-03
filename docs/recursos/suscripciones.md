# Suscripciones a los recursos

Nota: *La suscripción a recursos es una idea en planeación*

Los recursos son repositorios públicos que son actualizados de forma automática en `GitHub`.
Se recomienda suscribirse al repositorio (*watch*, *star*, *fork*), sin embargo no es un método para estar siempre
informados de una actualización o nueva versión, mucho menos es útil para automatizar el proceso de obtener
la versión más reciente del repositorio.

Por lo anterior, se plantea contar con una aplicación web y API que permita realizar dichas suscripciones
que consiste en (entre otras) las siguientes tareas:

- Registrar una cuenta de usuario en el sistema de suscripciones.
- Listar los recursos a los que se puede suscribir.
- Suscribirse vía correo electrónico a un recurso, recibiendo una notificación cada que ocurra un cambio.
- Suscribirse vía webhook a un recurso, recibiendo una llamada HTTP a la URL registrada con los datos
  del proyecto y suscriptor cada que ocurra un cambio.

De esta forma, se podría informar a los suscriptores cada que un nuevo proyecto ha sido actualizado,
ya sea para su información, trabajo manual o desencadenar su proceso automatizado de actualización.
