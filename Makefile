DOCKER_COMPOSE_DEV = docker-compose

help:
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

start: ## Start all the stack
	@-docker network create comptaBook
	$(DOCKER_COMPOSE_DEV) up -d
	bash -c './clear-cache.sh'
	bash -c "symfony server:start -d"
	bash -c "symfony open:local"

stop: ## Stop all the containers that belongs to the project
	@-docker network disconnect comptaBook
	$(DOCKER_COMPOSE_DEV) down
	bash -c "symfony server:stop"

db-migrate:
	bash -c "symfony console doctrine:migration:migrate -n"

build-assets:
	bash -c "yarn encore dev"

build-assets-watch:
	bash -c "yarn encore dev --watch"
