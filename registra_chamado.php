<?php

  echo '<pre>';
    print_r($_POST);
  echo '</pre>';

  // Montagem do texto
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);
  
  $text = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

  // Abrindo o arquivo
  $arquivo = fopen('arquivo.txt', 'a');

  // Escrevendo o arquivo
  fwrite($arquivo, $text);

  // Fechando o arquivo
  fclose($arquivo);

  header('Location: abrir_chamado.php');
?>