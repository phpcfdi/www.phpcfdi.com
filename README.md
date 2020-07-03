# phpCfdi website

:us: This project creates the documentation for phpCfdi website.

Este proyecto está hecho para crear el sitio de <https://www.phpcfdi.com/>.

## Requisitos

- [`markdownlint`](https://www.npmjs.com/package/markdownlint)
- [`mkdocs`](https://www.mkdocs.org/)
- [`mkdocs-material`](https://squidfunk.github.io/mkdocs-material/)
- [`mkdocs-minify-plugin`](https://github.com/byrnereese/mkdocs-minify-plugin)
- [`pymdown-extensions`](https://facelessuser.github.io/pymdown-extensions/)
- [`markdown-include`](https://pypi.org/project/markdown-include/)

## Construcción del sitio

El proceso incluye la ejecución de `markdownlint` para verificar que no existan errores en los archivos de markdown y la construcción del sitio usando `mkdocs`.

```shell
markdownlint --config .markdownlint.json .
mkdocs build --clean --strict
```

Para probar el sitio se puede ejecutar `mkdocs serve` que publicará el sitio en tiempo real en `http://127.0.0.1:8000/`.

## Construir usando `docker`

Construir la imagen `mkdocs-phpcfdi`

```shell
docker build docker/ -t mkdocs-phpcfdi
```

Construir el proyecto en `$PWD/site/`:

```shell
# ejecución de markdownlint
docker run -it --rm --volume "$PWD:/tmp/project" --user "$(id -u):$(id -g)" mkdocs-phpcfdi \
    markdownlint --config /tmp/project/.markdownlint.json /tmp/project/
# ejecucion de mkdocs para contruir el proyecto
docker run -it --rm --volume "$PWD:/tmp/project" --user "$(id -u):$(id -g)" mkdocs-phpcfdi \
    mkdocs build -f /tmp/project/mkdocs.yml --clean --strict
```

Servir el proyecto en `http://127.0.0.1:8015/`:

```shell
docker run -it --rm --volume "$PWD:/tmp/project" --user "$(id -u):$(id -g)" --publish 127.0.0.1:8015:8000 mkdocs-phpcfdi \
    mkdocs serve -a 0.0.0.0:8000 -f /tmp/project/mkdocs.yml
```

## Publicación

```shell
rsync -az --force --delete --cvs-exclude --progress site/ phpcfdi@phpcfdi.com:static-website
```

## License / Licencia

Esta obra está licenciada bajo la Licencia Creative Commons Atribución 4.0 Internacional. Para ver una copia de esta licencia, visite <http://creativecommons.org/licenses/by/4.0/> o envíe una carta a Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.

This work is licensed under the Creative Commons Attribution 4.0 International License. To view a copy of this license, visit <http://creativecommons.org/licenses/by/4.0/> or send a letter to Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.
