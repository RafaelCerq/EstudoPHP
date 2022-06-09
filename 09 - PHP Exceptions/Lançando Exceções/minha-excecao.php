<?php

	class MinhaExcecao extends DomainException
	{
		public function exibe()
		{
			echo "Exibindo";
		}
	}

	try {
		throw new MinhaExcecao();
	} catch (MinhaExcecao $e) {
		$e->exibe();
	}
