# exampleSymfony

# Symfony 4
composer create-project symfony/skeleton "name"
## Symfony 3.3
composer create-project symfony/skeleton:3.3.x-dev demo
## Symfony 3.4(it must be folder empty )
composer create-project symfony/website-skeleton:3.4.* . -vvv

#Suggest
Run for see options
````
php bin/console
````
# symfony/make-bundle
Run for make
````
composer require make
````
# make controller
Install the package for create controllers
````
composer require annotations
````
composer require doctrine/annotations

php bin/console make:controller MainController

# dump
composer require dump

# server less v 4.4
composer require server

php bin/console server:run

php bin/console server:start


# optional for update
 composer update "symfony/*"

# template
Run for install template engine Twig
````
composer require template
````

# ORM
````
composer require orm
````
then set up your database on your dotenv

DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7
Change your settings for connect and set the db_name.
Allow connections for user
````mysql
GRANT ALL PRIVILEGES ON *.* TO root@my_ip IDENTIFIED BY ‘root_password‘ WITH GRANT OPTION;
````
##Create DB
Run for create Data Base mentioned before. And it will created by the default name
````
php bin/console doctrine:database:create
````
### Make entity
````
php bin/console make:entity 
````
