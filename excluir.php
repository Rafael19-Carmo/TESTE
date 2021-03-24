<?php
    $excluir = $_GET['id'];
    include "conexao.php";
    
    $sql = "delete from produto where id = '$excluir'";
    mysqli_query($conexao,$sql);

    if (isset($_POST['valor'])) {
		$valor = $POST ['valor'];
		header("Location: visualizar_prod.php?valor=$valor");
		
	}
	else {
		header("Location: visualizar_prod.php");
    }

    
?>