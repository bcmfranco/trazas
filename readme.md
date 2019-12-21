Requisitos: 
1) Realizado en PHP: 7.1.32
2) Laravel Versión 5.8

1) En la terminal:
composer create-project laravel/laravel trazas

2) En la terminal:
php artisan key:generate

3) En la terminal:
php artisan serv

4) En el archivo .env en la línea 12, ingresar "historias" como valor de DB_DATABASE, teniendo que quedar "DB_DATABASE=historias" sin las comillas.

5) En la terminal:
php artisan migrate

6) En la terminal:
php artisan db:seed

7) Ingresar al proyecto

8) El primer usuario que sea logueado, será el administrador 
