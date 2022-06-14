<?php

$mysql = new mysqli('127.0.0.1:3306', 'root', 'root', 'blog');
$mysql->set_charset('utf8');

if ($mysql == FALSE) {
    echo "Erro na conexão";
}
