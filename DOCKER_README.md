# Guia do Ambiente de Desenvolvimento Docker

Este guia contém todas as informações necessárias para construir, executar e gerenciar o ambiente de desenvolvimento local para este projeto usando Docker.

## Estrutura de Arquivos

```
/
├─ docker/
│  ├─ nginx/
│  │  └─ default.conf   # Configuração do Nginx
│  └─ php/
│     ├─ Dockerfile         # Dockerfile para o serviço PHP-FPM
│     └─ docker-entrypoint.sh # Script de inicialização do container
├─ .env.example            # Exemplo de arquivo de variáveis de ambiente
└─ docker-compose.yml      # Arquivo principal do Docker Compose
```

## Instruções de Uso

### Pré-requisitos
- Docker
- Docker Compose

### 1. Configuração Inicial

Copie o arquivo de exemplo `.env.example` para `.env`. Este arquivo será usado pelo Docker Compose para configurar as variáveis de ambiente dos containers.

```bash
cp .env.example .env
```
**Importante:** Você pode alterar os valores em `.env` se necessário, mas os valores padrão são projetados para funcionar com a configuração do `docker-compose.yml`.

### 2. Build e Start dos Containers

Para construir as imagens e iniciar os serviços, execute o seguinte comando na raiz do projeto:

```bash
docker-compose up --build -d
```
- `--build`: Força a reconstrução da imagem do `app` a partir do `Dockerfile`. Use-o na primeira vez ou quando fizer alterações no `Dockerfile` ou no script `docker-entrypoint.sh`.
- `-d`: Executa os containers em modo "detached" (em segundo plano).

### 3. Acessando a Aplicação

- **Aplicação Web:** Acesse [http://localhost:8080](http://localhost:8080) no seu navegador.
- **Banco de Dados:** O banco de dados está acessível na porta `3306` do seu `localhost`. Você pode usar um cliente de banco de dados (como DBeaver, TablePlus ou DataGrip) com as seguintes credenciais (do arquivo `.env`):
    - **Host:** `127.0.0.1`
    - **Porta:** `3306`
    - **Usuário:** `app`
    - **Senha:** `secret`
    - **Banco de Dados:** `app_dev`

### 4. Executando Comandos no Container

É comum precisar executar comandos dentro do container da aplicação (por exemplo, `composer`, `php`, etc.).

#### Executando Composer

Para instalar ou atualizar dependências, você pode executar o Composer que está instalado no container `app`.

```bash
docker-compose exec app composer install
# Ou `update`, `require`, etc.
docker-compose exec app composer require flightphp/flight
```

#### Acessando o Shell (Bash)

Para obter um shell interativo dentro do container `app`:

```bash
docker-compose exec app bash
```
Uma vez dentro, você pode executar qualquer comando, como `php artisan migrate` (se fosse Laravel) ou comandos específicos do seu mini-framework.

### 5. Parando os Containers

Para parar todos os serviços:

```bash
docker-compose down
```
Se você quiser parar e remover os volumes (isso **APAGARÁ** os dados do seu banco de dados), use:
```bash
docker-compose down -v
```

## Breve Explicação Técnica

### Por que PHP-FPM + Nginx?

Em vez de usar o Apache com `mod_php`, separamos as responsabilidades em dois containers:
1.  **`app` (PHP-FPM):** Um processo otimizado para interpretar e executar código PHP. Ele não lida diretamente com requisições HTTP, apenas processa os scripts `.php`.
2.  **`web` (Nginx):** Um servidor web leve e de alta performance. Ele é excelente para servir arquivos estáticos (CSS, JS, imagens) e atua como um "proxy reverso", encaminhando apenas as requisições para arquivos `.php` para o serviço `php-fpm`.

Essa arquitetura é mais performática, segura e escalável, sendo o padrão para ambientes de produção modernos.

### Bind Mounts (`./:/var/www/html`)

A linha `volumes: - ./:/var/www/html` no `docker-compose.yml` "espelha" o diretório do seu projeto local para dentro do container. Isso significa que qualquer alteração que você fizer nos arquivos localmente será refletida **instantaneamente** no container, sem a necessidade de reconstruir a imagem. É a chave para um ambiente de desenvolvimento produtivo (DX - Developer Experience).

**Aviso para Produção:** Em produção, você **não** usaria bind mounts. Em vez disso, você copia o código da aplicação para dentro da imagem durante o build (usando o comando `COPY` no Dockerfile) para criar um artefato imutável.

### Healthchecks

O `healthcheck` no serviço `db` garante que o container `app` só tente iniciar depois que o banco de dados estiver realmente pronto para aceitar conexões. Isso evita erros de "connection refused" durante a inicialização.

### User Mapping e Permissões

Ambientes de desenvolvimento com bind mounts podem gerar problemas de permissão de arquivos entre o sistema host e o container. O script `docker-entrypoint.sh` pode ser estendido para garantir que o usuário `www-data` (usado pelo `php-fpm` e `nginx`) tenha as permissões corretas para escrever em diretórios como `storage` ou `cache`, se o framework exigir.
