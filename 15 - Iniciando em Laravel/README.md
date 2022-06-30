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