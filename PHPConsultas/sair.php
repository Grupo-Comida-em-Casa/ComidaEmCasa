<?php
   session_start();

   $_SESSION['id_usuario'] = '';
   $_SESSION['nome_usuario'] = '';
   $_SESSION['email_usuario'] = '';

   header("Location: ../phppaginas/index.php");
?>