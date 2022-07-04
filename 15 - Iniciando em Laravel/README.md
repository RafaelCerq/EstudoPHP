# Projeto em PHP 8.^ e Laravel 9.^

# Habilitar fileinfo para criar projeto via composer
- Localizar o arquivo php.ini no local de instalação do PHP
- localizar dentro do arquivo o item extension=fileinfo e retirar o comentário

# Criando Projeto Laravel com composer
- composer create-project laravel/laravel controle-series

# Obs. Caso utilize este projeto, execute:
- composer update

# Server PHP Artisan (executar na raiz do projeto)
- php artisan serve

# Server PHP Artisan (com host e porta)
- php artisan serve --host=0.0.0.0 --port=8000


# Em caso de 500 - Server Error abra a pasta raiz do projeto e execute:
- copy .env.example .env
- php artisan key:generate


# Criar controller por linha de comando
- php artisan make:controller nomeController

# Instalar componentes node (laravel mix)
- npm install
- npm install bootstrap
- npm run dev (2x)

# Criar Migration
- php artisan make:migration create_series_table

# Executar Migrate
- php artisan migrate

# Zera as micrations e tabelas do banco, em seguita executa novmanete Migrate
- php artisan migrate:fresh

# desfazer execução de Migrate
- php artisan migrate:rollback
- php artisan migrate:rollback --step=5

# Criar Model e migration
- php artisan make:model Season -m