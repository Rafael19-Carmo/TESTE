<?php 
    $id = $_GET['id']; 

    $sql = "update orcamento set tipo = 2 where id = '$id'";
    include "conexao.php";

    mysqli_query($conexao,$sql);

    header("location:orcamentos.php");
?>