# docker-lamp

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


Comandos para Git

git init
git status
git add .


.gitignore
git commit -m "first commit"
git add .
git branch
git branch -M main
