current-dir := $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

# Targets
#
.PHONY: debug
debug:	### Debug Makefile itself
	@echo $(UNAME)

.PHONY: dockerize
dockerize: composer-install
	@docker build -t challenge-luismaria:latest .

# 🐘 Composer
composer-env-file:
	@if [ ! -f .env.local ]; then echo '' > .env.local; fi

.PHONY: start
start: dockerize
	@docker run --rm -p 9091:9091 challenge-luismaria

.PHONY: composer-install
composer-install: CMD=install

.PHONY: composer
composer composer-install: composer-env-file
	@docker run --rm $(INTERACTIVE) --volume $(current-dir):/app --user $(id -u):$(id -g) \
		composer:1 $(CMD) \
			--ignore-platform-reqs \
			--no-ansi

# Test
.PHONY: test behat

test: CMD=vendor/bin/phpunit -c phpunit.xml.dist

behat: CMD=vendor/bin/behat -p challenge -v

test behat:
	@docker run --rm -it -v $(current-dir)\:/app -w /app php:7.4.14-alpine $(CMD)