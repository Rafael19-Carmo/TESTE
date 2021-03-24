
 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOMAX</title>
</head>
<body>
    <?php
    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from produto where id = '$id'";
            include "conexao.php";
            $dados = mysqli_query($conexao,$sql);
            while($linha = mysqli_fetch_array($dados)){
                $nome = $linha['nome'];
                $tipo = $linha['tipo'];
                $descricao = $linha['descricao'];
                $imagem = $linha['imagem'];    
            }

        } 
        else{
            $id = 0;
            $nome = "";
            $tipo = ""; 
            $descricao = "";
            $imagem = "";
        }
    
    ?>
    <a href="links_produtos.html">voltar</a><br><br><br><br>
    <p>CADASTRO PRODUTOS</p><br>
    <form action="salvar_produto.php" method="POST" enctype="multipart/form-data">  
    <input type="hidden" name="id" value="<?php echo $id;?>" />
        Nome: <input type="text" required name="nome" value ="<?php echo"$nome"; ?>"><br>
        Tipo: <select name="tipo" required value = <?php echo"$tipo";?>>
                <option value="portao">Portão Basculante</option>
                <option value="portao_comum">Portão Comum</option>
                <option value="porta">Porta</option>
                <option value="janela">Janela</option>
                <option value="cobertura">Cobertura Metálica</option>
                <option value="porteira">Porteira</option>
                <option value="marca">Marca p/ Gado</option>
                <option value="mao_de_obra">Mão de Obra</option>
                <option value="outros">Outros</option>
            </select><br>
            descricao <input type="text" required name="desc" value = "<?php echo"$descricao";?>"><br>
            imagem<input type="file" required name="imagem" value = "<?php echo"img/.'$imagem'" ?>">
            <input type="submit" value="CADASTRAR">
    

    </form>
 
    </body>
</html>