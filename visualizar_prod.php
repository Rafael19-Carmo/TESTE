<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="links_produtos.html">voltar</a><br><br><br><br>
    <p>Produtos</p>
    <form action="visualizar_prod.php" method="POST">
    <?php
          $conteudo = "";
          if (isset($_POST['pesquisa'])) {
            $conteudo = $_POST['pesquisa'];
          }
    ?>    
    
    <input type = "text" name = "pesquisa"> 
    <input type="submit" value = "pesquisar">

    <?php
        if(isset($_POST['pesquisa'])){
            $pesquisar = $_POST['pesquisa'];
            include "conexao.php";

            $sql = "select * from produto where nome like '$pesquisar%'";
            $resultado = mysqli_query($conexao,$sql);

            echo "<table border='1'>";
            echo "<td>Nº de Identificação</td>";
            echo "<td>Imagem</td>";
            echo "<td>Nome</td>";
            echo "<td>Tipo</td>";
            echo "<td>Descrição</td>";
            echo "<td>Data/Hora de postagem</td>";
            echo "<td>EDITAR</td>";
            echo "<td>EXCLUIR</td>";

            
            while($linha = mysqli_fetch_array($resultado)){
                $idprod = $linha['id'];
                $imagem = $linha['imagem'];

                echo "<tr>";
                    echo "<td>".$idprod."</td>";
                    echo "<td><img src='img/$imagem' width = '55px' height = '50px'></td>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>".$linha['tipo']."</td>";
                    echo "<td>".$linha['descricao']."</td>";
                    echo "<td>".$linha['dt_hr']."</td>";
                    echo "<td><a href = 'cadastroP.php?id=$idprod &valor=$pesquisar'>EDITAR PRODUTO</td>";
                    echo "<td><a href = 'excluir.php?id=$idprod&valor=$pesquisar'>EXCLUIR PRODUTO</td>";
                
                    
                echo "</tr>";
            }


            echo "</table>";
        }

        else{
            include "conexao.php";
            $sql = "select * from produto";
            $resultado = mysqli_query($conexao,$sql);     
       
            echo "<table border='1'>";
            echo "<td>Nº de Identificação</td>";
            echo "<td>Imagem</td>";
            echo "<td>Nome</td>";
            echo "<td>Tipo</td>";
            echo "<td>Descrição</td>";
            echo "<td>Data/Hora de postagem</td>";
            echo "<td>EDITAR</td>";
            echo "<td>EXCLUIR</td>";

            
            while($linha = mysqli_fetch_array($resultado)){
                $idprod = $linha['id'];
                $imagem = $linha['imagem'];

                echo "<tr>";
                    echo "<td>".$idprod."</td>";
                    echo "<td><img src='img/$imagem' width = '55px' height = '50px'></td>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>".$linha['tipo']."</td>";
                    echo "<td>".$linha['descricao']."</td>";
                    echo "<td>".$linha['dt_hr']."</td>";
                    echo "<td><a href = 'cadastroP.php?id=$idprod'>EDITAR PRODUTO</td>";
                    echo "<td><a href = 'excluir.php?id=$idprod'>EXCLUIR PRODUTO</td>";
                
                    
                echo "</tr>";
            }


            echo "</table>";
        }
    ?>    
    
    
    
    </form>



</body>
</html>