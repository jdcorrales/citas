Laravel <br>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<br>
<br>
Citas es una aplicacióin api rest que contiene los sercios de agenda de prestacines para cada una de las sedes.


Instalación

Para la instalación siga los sigientes pasos:

Clonar el respositorio

```
git clone https://github.com/jdcorrales/citas.git citas
```

duplique el archivo .env.example y renombrelo como .env

En un terminal de linea comandos ingrese a la cartera citas e instale los paquetes de composer.

```
composer install
```

En un terminal de linea comandos ingrese a la cartera citas y ejecute las siguientes instrucciones.

```
php artisan key:gererate
php artisan jwt:secret
```

en el archivo .env configure las variables para la conección a la base de datos exemplo.

```
DB_HOST=127.0.0.1 //host del servidor de DB
DB_PORT=3306 //Puerdo del servidro DB
DB_DATABASE=citas //Nombre de la DB
DB_USERNAME=homestead //Usuario de DB
DB_PASSWORD=secret //Password de la DB
```
En un terminal de linea de comandos ingrese a la cartera citas y ejecute las siguientes instrucciones.

```
php artisan migrate //Crea las tablas en la DB.
php artisan db:seed //Pobla las tablas con datos de pruebas.
```


