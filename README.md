## Instalacion de dependencias por composer

```
composer install 
```
## Ajustar variables de entorno

duplicar el archivo .env.example por .env setear credenciales de acceso a la base de datos

firmar el proyecto con la siguiente instrucción

```
php artisan key:generate
```

ejecutar las migraciones para construir las tablas

```
php artisan migrate
```

## Ejecutar servidor de pruebas de artisan

```
php artisan serve
```


## Importar datos en tablas

Es necesario importar la tabla de medicamentos, se preparo archivo .csv database/backup/codigom.csv

tabla de roles: database/backup/roles.csv

