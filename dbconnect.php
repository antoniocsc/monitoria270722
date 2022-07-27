<?php
            $servidorDB="172.16.0.8"; //localhost
            $userDB="21090";
            $senhaDB="34336713Ac@";
            $bancoDB="21090";
            $linkDB=mysqli_connect($servidorDB,$userDB,$senhaDB,$bancoDB);
            if(!$linkDB){
            die("NÃO CONSEGUI CONEXÃO COM O BANCO DE DADOS");
 }
?>