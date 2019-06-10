<?php
  session_start();
/*
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
  // Remover indices do array de sessao -> unset()
  unset($_SESSION['x']); // para remover o indice apenas se existir

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';



  // Destruir a variavel de sessao -> session_destroy()
  session_destroy(); // sera destruida
  // forcar um redirecionamento


  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
*/

session_destroy();
header('Location: index.php');

