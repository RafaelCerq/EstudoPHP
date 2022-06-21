# Habilitar pdo_sqlite
- Localizar o arquivo php.ini no local de instalação do PHP
- localizar dentro do arquivo o item extension=pdo_sqlite e retirar o comentário

- composer install
- composer dumpautoload

- O comando vendor\bin\doctrine.bat orm:schema-tool:create, processa o schema e o cria diretamente com o EntityManager ou gera o SQL para criar esse schema no banco de dados. Execute para criar "banco.sqlite"

- composer require doctrine/migrations
- vendor\bin\doctrine-migrations migrations:diff (Gerar migrations)
- vendor\bin\doctrine-migrations migrations:migrate (Executa todas as migrations)