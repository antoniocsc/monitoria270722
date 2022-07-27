<?php
session_start();
if ( !isset($_SESSION['CPF']) ) { // testa se existe CPF na sessão => já fez login
    ob_clean();
    header("Location:index.php");
 } 
?>