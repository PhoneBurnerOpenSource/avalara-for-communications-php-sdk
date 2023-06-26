SHELL := bash

php = docker compose run --rm php
composer = $(php) composer

vendor:
	@docker compose build --pull
	@$(composer) install

.PHONY: clean
clean:
	@rm -Rf ./vendor

.PHONY: test
test:
	@$(composer) phpunit
