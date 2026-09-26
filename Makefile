.PHONY: help up down down-v build rebuild restart logs ps shell composer env

DOCKER_COMPOSE := docker compose
APP_SERVICE := app
APP_URL := http://localhost:8080

help: ## Lista os comandos disponíveis
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[36m%-12s\033[0m %s\n", $$1, $$2}'

env: ## Cria .env a partir de .env.example se ainda não existir
	@test -f .env || (cp .env.example .env && echo "Arquivo .env criado a partir de .env.example")

up: env ## Sobe os containers (build + detached)
	$(DOCKER_COMPOSE) up --build -d
	@echo ""
	@echo "Aplicação: $(APP_URL)"
	@echo "Banco:     127.0.0.1:3306 (credenciais em .env)"

down: ## Para e remove os containers (mantém o volume do banco)
	$(DOCKER_COMPOSE) down

down-v: ## Para os containers e apaga volumes (limpa o banco de dados)
	$(DOCKER_COMPOSE) down -v

build: ## Reconstrói as imagens sem subir os serviços
	$(DOCKER_COMPOSE) build

rebuild: down build up ## Recria tudo do zero (containers + imagens)

restart: ## Reinicia os serviços em execução
	$(DOCKER_COMPOSE) restart

logs: ## Acompanha logs de todos os serviços
	$(DOCKER_COMPOSE) logs -f

ps: ## Mostra status dos containers
	$(DOCKER_COMPOSE) ps

shell: ## Abre bash no container da aplicação (PHP)
	$(DOCKER_COMPOSE) exec $(APP_SERVICE) bash

composer: ## Executa composer install no container app
	$(DOCKER_COMPOSE) exec $(APP_SERVICE) composer install
