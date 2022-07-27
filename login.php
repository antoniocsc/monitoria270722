<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<meta charset="utf-8">
<body>

<h1>login.php</h1>
<?php
    $CPF=$_POST['CPF'];
    $senha=$_POST['senha'];
    require("dbconnect.php");
    require("cryp2graph2.php");
    // montar comando sql para envio do sgdb
    $sql="select * from usuario where CPF='$CPF'";
    $dataset=mysqli_query($linkDB, $sql);
    // testar retorno do comando sql
    if (!$dataset){
        //erro na programação
        die("erro no sql, verifique.");
    }
    // verificar quantidade de linha que voltaram
    $qtde=mysqli_num_rows($dataset);
    if($qtde==0){
        //não encontrado
        echo("usuário/senha não encontrado no banco de dados");
    } else {
        //localizado (mas só tem 1 linha, porque busquei chave primária)
        $linhaBD=mysqli_fetch_assoc($dataset);
        // $LinhaDB["CPF"]="123346778"
        // $LinhaDB["nomeCompleto"]="fulano01"
        // $LinhaDB["dtNasc"]="2000-01-01"
        // $LinhaDB["senha"]= 565786865

        // copiar váriaveis do datset para varáveis mais simples
        $CPF=$linhaBD["CPF"];
        $nomeCompleto=$linhaBD["nomeCompleto"];
        $dtNasc=$linhaBD["dtNasc"];
        $senhaDB=$linhaBD["senha"];
        if (!ChecaSenha($senha,$senhaDB)){
            // senha não encontrada
            echo("Usuário/senha não localizado no banco de dados ");
        } else {
            //escrever dados na tela
            echo("login encontrado!<br>");
            echo("Nome = $nomeCompleto<br>");
            echo("DtNasc = $dtNasc<br>");
            //criar sessão e salvar  dados importantes
            session_cache_expire(15); // 15 minutos de sessão, se não tiver  comunicação, expira
            session_start();
            $_SESSION['CPF']=$CPF;
            $_SESSION['nomeCompleto']=$nomeCompleto;
            $_SESSION['senhaDB']=$senha;
            //Redirecionar para o menu
            ob_clean();
            header("location: menu.php");
        }
    }
?>
<?php require("rodape.php"); ?>

<p></p>

</body>
</html>