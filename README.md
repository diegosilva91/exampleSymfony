# exampleSymfony

# Symfony 3.3
composer create-project symfony/skeleton:3.3.x-dev demo
# Symfony 3.4(it must be folder empty )
composer create-project symfony/website-skeleton:3.4.* . -vvv
# Symfony 4
composer create-project symfony/skeleton "name"


# symfony/make-bundle
composer require make

# make controller
composer require annotations
composer require doctrine/annotations
php bin/console make:controller MainController

# dump
composer require dump

# server least 4.4
composer require server
php bin/console server:run

php bin/console server:start


# optional for update
 composer update "symfony/*"

# template
composer require template
