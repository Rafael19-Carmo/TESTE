<?php
    $titulo = $_POST['titulo'];
    $linc = $_POST['linc'];
    $id = $_POST['id'];
    if($id == 0){
        $sql = "insert into noticia values (null,'$titulo','$linc',NOW())";
        include "conexao.php";

        mysqli_query($conexao,$sql);
        header("location:inserir_noticia.php");
    }

    else{
        $sql = "update noticia set titulo = '$titulo', link = '$linc' where id =  '$id'";

        include "conexao.php";

        mysqli_query($conexao,$sql);
        header("location:visualizar_noticia.php");
    }
        
    
?>


