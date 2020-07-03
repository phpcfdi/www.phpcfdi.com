# phpCfdi website

:us: This project creates the documentation for phpCfdi website.

Este proyecto está hecho para crear el sitio de <https://www.phpcfdi.com/>.

## Requisitos

- [`markdownlint`](https://www.npmjs.com/package/markdownlint)
- [`mkdocs`](https://www.mkdocs.org/)
- [`mkdocs_material`](https://squidfunk.github.io/mkdocs-material/)
- [`mkdocs_minify_plugin`](https://github.com/byrnereese/mkdocs-minify-plugin)
- [`pymdown_extensions`](https://facelessuser.github.io/pymdown-extensions/)

## Construcción del sitio

El proceso incluye la ejecución de `markdownlint` para verificar que no existan errores en los archivos de markdown y la construcción del sitio usando `mkdocs`.

```shell
markdownlint --config .markdownlint.json .
mkdocs build --clean --strict
```

## Publicación

```shell
rsync -az --force --delete --cvs-exclude --progress site/ phpcfdi@phpcfdi.com:static-website
```

## License / Licencia

Esta obra está licenciada bajo la Licencia Creative Commons Atribución 4.0 Internacional. Para ver una copia de esta licencia, visite <http://creativecommons.org/licenses/by/4.0/> o envíe una carta a Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.

This work is licensed under the Creative Commons Attribution 4.0 International License. To view a copy of this license, visit <http://creativecommons.org/licenses/by/4.0/> or send a letter to Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.
