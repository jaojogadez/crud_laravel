# Controle de Gastos Pessoais

Sistema web para gerenciamento de gastos pessoais, desenvolvido com Laravel e PHP. O projeto permite cadastrar, visualizar, editar e excluir despesas, facilitando a organização e o acompanhamento dos gastos.

## Objetivo

Desenvolver uma aplicação web utilizando o framework Laravel, aplicando os conceitos de CRUD, banco de dados, migrations, Models, Controllers, rotas e templates Blade.

## Funcionalidades

- **Cadastrar gastos:** registrar despesas com descrição, valor, categoria e data.
- **Listar gastos:** visualizar os gastos cadastrados.
- **Editar gastos:** atualizar as informações de uma despesa.
- **Excluir gastos:** remover despesas cadastradas com confirmação.
- **Validar informações:** verificar os dados enviados pelos formulários.
- **Mensagens de retorno:** informar quando uma operação é realizada com sucesso.

## Tecnologias utilizadas

- PHP
- Laravel
- SQLite
- HTML5
- CSS3
- Blade
- Git e GitHub

## Estrutura do projeto

```text
app/
├── Http/
│   └── Controllers/
│       └── GastoController.php
└── Models/
    └── Gasto.php

database/
└── migrations/

public/
└── css/
    └── style.css

resources/
└── views/
    └── gastos/
        ├── index.blade.php
        ├── create.blade.php
        └── edit.blade.php

routes/
└── web.php
```

## Banco de dados

O projeto utiliza SQLite para armazenar os registros.

A entidade principal é `Gasto`, com os seguintes atributos:

| Campo | Tipo |
|---|---|
| id | Identificador |
| descricao | String |
| valor | Decimal (10,2) |
| categoria | String |
| data | Date |
| created_at | Timestamp |
| updated_at | Timestamp |

## Instalação e execução

### 1. Pré-requisitos

- PHP
- Composer
- SQLite
- Git

### 2. Clonar o repositório

```bash
git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git
```

Entre na pasta do projeto:

```bash
cd SEU-REPOSITORIO
```

### 3. Instalar as dependências

```bash
composer install
```

### 4. Configurar o ambiente

Copie o arquivo de configuração:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 5. Configurar o SQLite

Crie o arquivo do banco de dados:

```bash
touch database/database.sqlite
```

No arquivo `.env`, configure:

```env
DB_CONNECTION=sqlite
```

Se houver um valor personalizado em `DB_DATABASE`, ajuste-o para apontar para o arquivo `database/database.sqlite`.

### 6. Executar as migrations

```bash
php artisan migrate
```

### 7. Iniciar o servidor

```bash
php artisan serve
```

Acesse no navegador:

```text
http://127.0.0.1:8000
```

A listagem de gastos estará disponível em:

```text
http://127.0.0.1:8000/gastos
```

## Autor

Desenvolvido como projeto do DevMenthors para praticar desenvolvimento web com PHP e Laravel.
