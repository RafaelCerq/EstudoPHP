- Instalar composer (https://getcomposer.org)
- Verificar versão do composer: composer --version
- Repositório principal do Composer é um site chamado http://packagist.org

- Instalar dependências a partir do composer.json: composer install
- Atualizar dependências a partir do composer.json: composer update
- Atualizar autoload: composer dump-autoload
- Instalar dependências em ambiente de produção: composer install --no-dev


- Instalando dependências pelo composer: composer require nome-dependencia

    Exemplo: 
        composer require guzzlehttp/guzzle; 
        composer require symfony/dom-crawler; 




# phpUnit (Ferramenta para testes)
- Instalação: composer require --dev phpunit/phpunit
- Executando Teste com phpUnit: vendor\bin\phpunit tests\TestBuscadorDeCursos.php

# PHPCS (Verifica se o codigo está dentro dos padrões)
- Instalação: composer require --dev squizlabs/php_codesniffer
- Exibir os comandos do PHPCS que nos são disponibilizados: vendor\bin\phpcs --help
- Executando verificação: vendor\bin\phpcs --standard=PSR12 src\
- Obs. A execução acima irá rodar o PHPCS com o padrão da PSR12 analisando o código dentro da pasta "src"


# Phan (Ferramenta para analisar código e verificar existencia de erros)
- Instalação: composer require --dev phan/phan
- Executando: vendor\bin\phan --allow-polyfill-parser src\Buscador.php