<?php
  session_start();  
  $auth = $_SESSION['auth']??"";

  if(empty($auth) || $auth != true)
  {
    header('location:index.php?acao=erro');
  }  
?>