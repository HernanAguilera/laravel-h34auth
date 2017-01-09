# H34 Auth

## Instalación

> Este paquete hace uso de [zizaco/entrust](https://github.com/Zizaco/entrust)

1.- En el archivo composer.json de tu proyecto agrega:

```
"h34/auth": "dev-master"
```

luego ejecuta `composer update`

2.- En tu artivo app/config.php agrega el arrays de providers:

```
Zizaco\Entrust\EntrustServiceProvider::class,
H34\Auth\AuthServiceProvider::class,
```

3.- En el mismo archivo app/config.php debes colocar en el array de aliases:

```
'Entrust' => H34\Facades\Entrust::class,
```

4.- Ejecuta las migraciones de la base de datos con:

```
php artisan auth34:install
```

5.- [Instrucciones de uso](https://github.com/Zizaco/entrust#usage)
