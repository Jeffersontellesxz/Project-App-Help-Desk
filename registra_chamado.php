<?php

  session_start();

  // Montagem do texto
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);
  
  $text = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

  // Abrindo o arquivo.txt
  $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

  // Escrevendo o arquivo
  fwrite($arquivo, $text);

  // Fechando o arquivo
  fclose($arquivo);

  header('Location: abrir_chamado.php');
?>