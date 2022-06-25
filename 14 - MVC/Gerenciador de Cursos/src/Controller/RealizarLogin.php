<?php

    namespace Alura\Cursos\Controller;

    use Alura\Cursos\Entity\Usuario;
    use Alura\Cursos\Infra\EntityManagerCreator;

    class RealizarLogin implements InterfaceControladorRequisicao
    {
        /**
         * @var \Doctrine\Common\Persistence\ObjectRepository
         */
        private $repositorioDeUsuarios;

        public function __construct()
        {
            $entityManager = (new EntityManagerCreator())->getEntityManager();
            $this->repositorioDeUsuarios = $entityManager
                ->getRepository(Usuario::class);
        }

        public function processaRequisicao(): void
        {
            $email = filter_input(
                INPUT_POST,
                'email',
                FILTER_VALIDATE_EMAIL
            );

            if (is_null($email) || $email === false) {
                echo "O e-mail digitado não é um e-mail válido.";
                return;
            }

            $senha = filter_input(
                INPUT_POST,
                'senha',
                FILTER_SANITIZE_STRING
            );

            /** @var Usuario $usuario */
            $usuario = $this->repositorioDeUsuarios
                ->findOneBy(['email' => $email]);

            if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
                echo "E-mail ou senha inválidos";
                return;
            }

            header('Location: /listar-cursos');
        }
    }
