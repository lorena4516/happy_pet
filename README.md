#Instruccion de despliegue

1. Se necesita gestor de BD mysql, en este caso se uso xampp para acceder phpmyadmin.
2. Importar BD a phpmyadmin, en el sql se encuentra la creacion de base de datos y sus respectivas tablas.
3. Descargar proyecto desde github e implementarlo en htdocs de la carpeta de xampp.
4. Se debe editar el archivo .env, para la conexion a la BD (El proyecto no trae el archivo implementado se debe crear). Se dejo archivo .dev en el zip de la BD
    4.1 EDITAR LOS CAMPOS
        DB_DATABASE=mascotas_s
        DB_USERNAME=root
        DB_PASSWORD=
        XAMPP por defecto tiene el usuario root, sin contraseña
5. Desde la terminar de windows o la terminal de visual studio code, se debe acceder a la ruta del proyecto, ejemplo:
    cd C:\xampp\htdocs\mascotas
6. Cuando se esté en la ruta, se debe instalar los complementos de composer(dependencias del proyecto), con el siguiente comando:
    composer install 
7. Para finalizar se inicia el proyecto, ejecutando el comando: php artisan serv
8. usuario: lorena4516@hotmail.com - Contraseña: password
    
