<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="links_orcamento.html">voltar</a><br><br><br><br>

    <?php
          $conteudo = "";
          if (isset($_POST['pesquisar'])) {
            $conteudo = $_POST['pesquisar'];
          }
    ?>
    
    <h1>Orçamentos arquivados</h1><br>
    <form action = "orcamentos.php" method = "POST">
    
        <input type = "text" name ="pesquisar">
        <input type = "submit" value = "Pesquisa">
    </form>
</body>
</html>
<?php 
    

    if (isset($_POST['pesquisar'])){
        $pesquisar = $_POST['pesquisar'];
        $sql = "select * from orcamento where nome like '$pesquisar%' and tipo = 2";
        include "conexao.php";
        $resultado = mysqli_query($conexao,$sql);
            echo"<table border = '1'>";
            echo "<tr>";
            echo "<td>Identificação</td>";
            echo "<td>Nome</td>";
            echo "<td>Telefone 01</td>";
            echo "<td>Whatsapp</td>";
            echo "<td>E-mail</td>";
            echo "<td>Descrição</td>";
            echo "<td>Data de envio</td>";
            echo "<td>Arquivo</td>";
            echo "<td>Status</td>";
            echo "</tr>";

            while($linha = mysqli_fetch_array($resultado)){
                $up = $linha['$id'];
                echo"<tr>";
                echo "<td>".$linha['id']."</td>";
                echo"<td>".$linha['nome']."</td>";
                echo"<td>".$linha['telefone1']."</td>";
                echo"<td>".$linha['whatsapp']."</td>";
                echo"<td>".$linha['email']."</td>";
                echo"<td>".$linha['descricao']."</td>";
                echo"<td>".$linha['data_hora']."</td>";
                echo"<td>".$linha['img_exemplo']."</td>";
                echo"</tr>";
            }
            echo "</table>";
    }


    else{
        
        $sql = "select * from orcamento where tipo = 2";
        include "conexao.php";
        $resultado = mysqli_query($conexao,$sql);
            echo"<table border = '1'>";
            echo "<tr>";
            echo "<td>Identificação</td>";
            echo "<td>Nome</td>";
            echo "<td>Telefone 01</td>";
            echo "<td>Whatsapp</td>";
            echo "<td>E-mail</td>";
            echo "<td>Descrição</td>";
            echo "<td>Data de envio</td>";
            echo "<td>Arquivo</td>";
            echo "</tr>";

            while($linha = mysqli_fetch_array($resultado)){
                $up = $linha['id'];
                echo"<tr>";
                echo "<td>".$linha['id']."</td>";
                echo"<td>".$linha['nome']."</td>";
                echo"<td>".$linha['telefone1']."</td>";
                echo"<td>".$linha['whatsapp']."</td>";
                echo"<td>".$linha['email']."</td>";
                echo"<td>".$linha['descricao']."</td>";
                echo"<td>".$linha['data_hora']."</td>";
                echo"<td>".$linha['img_exemplo']."</td>";

                echo"</tr>";
            }
            echo "</table>";
     }
?>
