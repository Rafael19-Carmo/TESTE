<?php
    $excluir = $_GET['id'];
    include "conexao.php";
    
    $sql = "delete from noticia where id = '$excluir'";
    mysqli_query($conexao,$sql);

    if (isset($_POST['valor'])) {
		$valor = $POST ['valor'];
		header("Location: visualizar_noticia.php?valor=$valor");
		
	}
	else {
		header("Location: visualizar_noticia.php");
    }

    
?>