# Autoload com classmap, files e PSR-4
"autoload" : {
    "classmap": [
        "./Teste.php"
    ],
    "files": [
	"./functions.php"
    ],
    "psr-4" : {
        "Alura\\BuscadorDeCursos\\": "src/"
    }
}


- Para atualizar o arquivo autoload.php baseado no composer.json, podemos rodar o comando composer dumpautoload
- Para classes que não seguem o PSR-4, podemos definir um classmap dentro do composer.json
- Para carregar um biblioteca de funções automaticamente, podemos adicionar uma entrada files no composer.json


# Versionamento
- Comando: git tag -a v1.0.0
- O Composer consegue entender se chamarmos apenas git tag -a v1.0.0, mas utilizando a letra v na frente conseguimos evitar alguns problemas de compatibilidade com outros programas que podem ser essas tags.

# Semantic Versioning
- Existe um esquema de versionamento chamado SemVer, ou "Semantic Versioning". Ele define que o primeiro número é a versão princial ("MAJOR version" ou "versão maior"), que indica quebra de compatibilidade. Quando temos uma quebra de compatibilidade, nesse caso, trocaríamos a versão de v1.0.0 para v2.0.0.
- Se adicionarmos alguma compatibilidade sem quebrar nada, utilizamos o segundo número, referente à "MINOR version" (ou "versão menor"). Nesse caso, adicionamos alguma funcionalidade, por exemplo, mas tudo que existia continua funcionando. Já quando temos mudanças menores ou correções de bugs, o terceiro e último número, conhecido como "PATCH version" ("versão de correção"), é utilizado.
