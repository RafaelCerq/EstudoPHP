#Autoload com classmap, files e PSR-4
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