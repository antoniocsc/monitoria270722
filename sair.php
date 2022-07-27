<?php
  $_SESSION['CPF']="";
  $_SESSION['nomeCompleto']="";
  unset($_SESSION);
  session_abort();
  ob_clean();
  header("Location: index.php");
?>