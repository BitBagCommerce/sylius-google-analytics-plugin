phpunit:
	vendor/bin/phpunit

phpspec:
	vendor/bin/phpspec run --ansi --no-interaction -f dot

phpstan:
	vendor/bin/phpstan analyse

psalm:
	vendor/bin/psalm

ecs:
	vendor/bin/ecs check

ecs-fix:
	vendor/bin/ecs check --fix

behat-js:
	APP_ENV=test vendor/bin/behat --colors --strict --no-interaction -vvv -f progress

install:
	composer install --no-interaction --no-scripts

assets:
	tests/Application/bin/console assets:install tests/Application/public

backend:
	tests/Application/bin/console sylius:install --no-interaction
	tests/Application/bin/console sylius:fixtures:load default --no-interaction

behat:
	APP_ENV=test vendor/bin/behat --colors --strict --no-interaction -vvv -f progress

init: install assets backend

ci: init phpstan psalm phpunit phpspec behat

integration: init phpunit behat

static: install phpspec phpstan psalm

bash:
	docker exec -it sylius-google-analytics4-plugin_app_1 /bin/sh

start:
	docker-compose build
	docker-compose up -d
