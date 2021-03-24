<?php
    include "conexao.php";
    $id = $_POST['id'];           
    
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $desc = $_POST['desc'];
    $imagem = $_FILES["imagem"];
    

    if($imagem != null){

        $extensao = strtolower(substr($imagem['name'], -4 ));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "img/";

        move_uploaded_file($imagem['tmp_name'],$diretorio.$novo_nome);
    }
    

    
    if ($id == 0){
        $sql = "insert into produto values (null,'$nome','$tipo','$desc',NOW(),'$novo_nome')";
        mysqli_query ($conexao,$sql);
        
        header("Location:cadastroP.php");    
    
    }

    else{     
		$sql = "update produto set nome = '$nome',tipo = '$tipo', descricao = '$desc', dt_hr = NOW()  where id = '$id'";
        mysqli_query($conexao,$sql);
        $id = 0;
        header("Location: visualizar_prod.php");
    }



?>