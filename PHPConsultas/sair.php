<?php
   session_start();

   $_SESSION['id_usuario'] = '';
   $_SESSION['nome_usuario'] = '';
   $_SESSION['email_usuario'] = '';
   $_SESSION['id_ong'] = '';
   $_SESSION['instituicao_ong'] = '';
   $_SESSION['email_ong'] = '';
   $_SESSION['telefone'] = '';

   header("Location: ../phppaginas/index.php");
?>