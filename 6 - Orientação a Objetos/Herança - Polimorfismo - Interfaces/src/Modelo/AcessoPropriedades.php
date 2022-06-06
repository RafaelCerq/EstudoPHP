<?php

	namespace Alura\Banco\Modelo;

	// Forma de copiar uma parte do codigo e injetar onde queira
	trait AcessoPropriedades
	{
		// __get é chamado sempre tentamos acessar um atributo/propriedade que não existe ou é privado
		public function __get(string $nomeAtributo)
		{
			// uppercase first
			$metodo = 'recupera' . ucfirst($nomeAtributo);
			return $this->$metodo();
		}
	}
