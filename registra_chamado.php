<?php

session_start();

// criando o texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
//PHP_EOL => pular uma linha apos gravar a informação

//abrindo o arquivo, para armazenar os dados
$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

// escrevendo o texto no arquivo criado
fwrite($arquivo, $texto);

//fechando o arquivo
fclose($arquivo);

header('location: abrir_chamado.php');

?>