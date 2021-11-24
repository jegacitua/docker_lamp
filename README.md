# docker-lamp

Instalar docker para la version de tu sistema operativo
docker-compose, es proveido por la instalacion de Docker Engine por lo tanto
revisa con el siguiente comando "docker-compose -v" su versión

Instala Git para la version de tu sistema operativo

Para descargar el proyecto abre una terminal en tu carpeta donde desees almacenar
los proyectos y con una terminal o consola lanza el siguiente comando:
git clone https://github.com/jegacitua/docker_lamp.git

DOCKER DEL PROYECTO
Docker con Apache, MySql 8.0, PhpMyAdmin and PHP 5.6.40

- Puedes usar MariaDB 10.1 si cambias el tag image: por 'mariadb-10.1'
- Puedes usar MySql 5.7 si cambias el tag image: por 'mysql5.7'
- Puedes usar MySql 8.0 si cambias el tag image: por 'mysql:8.0'

Usa docker-compose como orquestador para levantar estos contenedores:

****
docker-compose up -d

docker-compose down

docker-compose up -d --build
****

Abra phpmyadmin en [http://localhost:8091](http://localhost:8091)
Abra el navegador web para ver un ejemplo de php simple en [http://localhost:8092](http://localhost:8092)

Ejecute el cliente mysql

- docker-compose exec db mysql -u root -p

A trabajar !

COMANDOS PARA GIT

git init
git status

git config --global user.mail "je.gacituab@gmail.com"
git config --global user.name "jegacitua"

git add .
git commit -m "inicio del proyecto"
git status

git branch              // lista las ramas disponibles
git branch rf-01        // crear una nueva rama
git checkout rf-01      // se cambia a la nueva rama

git remote add origin https://github.com/jegacitua/docker_lamp.git
git push -u origin master


CAMBIO DE CONFIGURACIONES PHP

/php/php.ini


REINICIAR SERVICIO APACHE

/etc/init.d/apache2 reload