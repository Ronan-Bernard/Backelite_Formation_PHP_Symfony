# Backelite Formation Symfony


## Prerequisites
* Install docker. See [https://docs.docker.com/engine/installation/](https://docs.docker.com/engine/installation/).
* Install docker-compose. See [https://docs.docker.com/compose/install/](https://docs.docker.com/compose/install/).


## Link project
* Symfony production [http://localhost:8000](http://localhost:8000/). 
* Symfony development [http://localhost:8000/app_dev.php](http://localhost:8000/app_dev.php). 
* PHP [http://localhost:8001](http://localhost:8001/). 
* PhpMyAdmin [http://localhost:8005](http://localhost:8005/) (user: root, password: root).
* MailCatcher [http://localhost:8003](http://localhost:8003/).
* OPcache GUI [http://localhost:8002](http://localhost:8002/).
* Kibana [http://localhost:8004](http://localhost:8004/).


## Docker
![symfony 1](https://cloud.githubusercontent.com/assets/1812050/21686131/8f962de6-d364-11e6-8cb6-e6a164f5e775.png)

### Start
* Move at the project root folder.
* Create container. Execute `(cd .docker/; sudo docker-compose build --force-rm --no-cache)`.
* Start container. Execute `(cd .docker/; sudo docker-compose up)`.

### Stop
* `Ctrl + C` inside the docker TTY.
* Execute `(cd .docker/; sudo docker-compose stop)`.

### Delete
* Execute `(cd .docker/; sudo docker-compose down)`.


## Xdebug
* Set you host'IP machine in `.docker/.env` file under variable `IP_HOST`.
* Restart project to apply new configuration.
* Config your IDE xdebug parameter. Change default port `9001`.
* Config your IDE xdebug parameter. Mapper your project folder to folder server`/var/www/Symfony`.

## PHP

### Start
* Open [http://localhost:8001](http://localhost:8001/)

## Symfony

### Start
* Install Symfony dependencies. Execute `(cd .docker/; sudo docker-compose exec --user www-data php composer install)`.
* Check configuration.Open link [http://localhost/config.php](http://localhost/config.php), or execute `(cd .docker/; sudo docker-compose exec --user www-data php php bin/symfony_requirements)`.
* Open [http://localhost:8000/app_dev.php](http://localhost:8000/app_dev.php)

### Clear Cache
* Clear PHP cache. Execute `(cd .docker/; sudo docker-compose exec --user www-data php php bin/console cache:clear)`.
* Clear Opcache. Execute `(cd .docker/; sudo docker-compose exec --user www-data php php bin/console opcache:clear)`.

### Use symfony command line 
* Execute `(cd .docker/; sudo docker-compose exec --user www-data php php bin/console #Action name# )`.
* Example `(cd .docker/; sudo docker-compose exec --user www-data php php bin/console debug:router)`.

### Use composer's command line
* Execute `(cd .docker/; sudo docker-compose exec --user www-data php composer #Action name# )` .
* Example `(cd .docker/; sudo docker-compose exec --user www-data php composer --version)`.

### Execute test
* execute `(cd .docker/; sudo docker-compose exec --user www-data php phpunit -c phpunit.xml.dist)`.

### Opcache install bundle 
* Add command line with [https://packagist.org/packages/sixdays/opcache-bundle](https://packagist.org/packages/sixdays/opcache-bundle). 
* Add GUI with [https://packagist.org/packages/matthimatiker/opcache-bundle](https://packagist.org/packages/matthimatiker/opcache-bundle). 





