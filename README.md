# REST API INCIDENTS

## About

Sistema desenvolvido durante o projeto de programação para a empresa RedBelt. A aplicação disponibiliza através de uma API REST os dados para fins de consumo.

-------------------------------------------------

## Instruções para rodar a API

* Baixe o projeto ou clone usando o comando
     ```bash
    git clone <https://github.com/caiorabelo/api-incidents.git>
    ```

* Para os passos seguintes é pré-requisito ter o Docker instalado no Sistema Operacional.

* Dentro da pasta do projeto tem uma pasta chamda laradock, acesse a mesma e rode os sequintes comandos:
     ```bash
     docker-compose up -d nginx mysql phpmyadmin
     ```

* Assim que todos os containers subirem execute os seguintes comandos:
     ```bash
     docker-compose exec --user=laradock workspace bash
     ```
     ```bash
     composer install bash
     ```
     ```bash
     php artisan migrate:fresh --seed
     ```
* Depois de todos os passos feitos a API já está devidamente configurada, o próximo passo é seguir as instruções para implatar o projeto do frontend que se encontra no outro repositório do GIT.          
-------------------------------------------------

## Rest API - EndPoints Incidentes
### Recuperar lista de incidentes

#### Requisição

`GET /api/incidents/`

```bash
http://localhost:8000/api/incidets
```
### Criar um novo incidente

#### Requisição

`POST /api/incidents/`

```bash
http://localhost:8000/api/incidents
```
### Recuperar um incidente específico

#### Requisição

`GET /api/incidents/:id`

```bash
http://localhost:8000/api/incidents/id
```
### Atualizar incidente

#### Requisição

`PUT /api/incidents/:id`

```bash
http://localhost:8000/api/incidents/id
```
### Deletar um incidente

#### Requisição

`DELETE /api/incidents/:id`

```bash
http://localhost:8000/api/incidents/1
```

## Rest API - EndPoint Criticidade
### Recuperar lista de critidades

#### Requisição

`GET /api/criticalities/`

```bash
http://localhost:8000/api/criticalities
```

## Rest API - EndPoint Tipos
### Recuperar lista de Tipos

#### Requisição

`GET /api/criticalities/`

```bash
http://localhost:8000/api/types
```