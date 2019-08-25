# Script para crear el archivo de listado de librerías

```shell
# generar el listado de paquetes con todo y release
GH_USERNAME=username GH_PASSWORD=password php search-organization-repositories.php packages.json

# generar el archivo de librerías
php create-markdown.php packages.json > ../../docs/librerias/listado-librerias.md

# a limpiar, a guardar, cada cosa en su lugar
rm packages.json

# todo en uno
GH_USERNAME=username GH_PASSWORD=password php search-organization-repositories.php \ |
    php create-markdown.php - > ../../docs/librerias/listado-librerias.md
```
