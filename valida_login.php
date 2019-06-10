<?php

  // Session start
  session_start();

  // Autenticação do usuario
  $usuario_autenticado = false;

  // Usuarios do sistema
  $usuario_app = [
    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
  ];

  foreach ($usuario_app as $user) {

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      $usuario_autenticado = true;
    }
  }

  if ($usuario_autenticado) {
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php');
  } else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
  }
