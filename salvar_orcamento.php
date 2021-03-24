<?php 
    $telefone1 = $_POST['telefone1'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];
    $imagem = $_FILES['arquivo'];
    $usuario = $_POST['usuario'];

    
    
    

    if($imagem != null){
        $extencao = strtolower(substr($imagem['name'], -4));
        $novo_nome = md5(time()) . $extencao;
        $diretorio = "arquivos_orcamento/";
        
        move_uploaded_file($imagem['tmp_name'],$diretorio.$novo_nome);
    }


    $sql = "insert into orcamento values (null,'$usuario','$telefone1','$whatsapp','$email','$descricao',NOW(),'$novo_nome',1)";
    include "conexao.php";

    mysqli_query($conexao,$sql);
    
 
    header("Location:cadastro_orcamento.php");
    

?>