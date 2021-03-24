<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>NOTÍCIAS</p><br>
    <a href="links_noticia.html">voltar</a><br><br><br><br>
    <?php
          
            include "conexao.php";
            $sql = "select * from noticia";
            $resultado = mysqli_query($conexao,$sql);     
       
            echo "<table border='1'>";
            echo "<td>Nº de Identificação</td>";
            echo "<td>Título</td>";
            echo "<td>LINK</td>";
            echo "<td>Data/Hora de postagem</td>";
            echo "<td>EDITAR</td>";
            echo "<td>EXCLUIR</td>";
            
            while($linha = mysqli_fetch_array($resultado)){
                $idprod = $linha['id'];
               

                echo "<tr>";
                    echo "<td>".$idprod."</td>";
                    echo "<td>".$linha['titulo']."</td>";
                    echo "<td>".$linha['link']."</td>";
                    echo "<td>".$linha['data_hora']."</td>";
                    echo "<td><a href = 'inserir_noticia.php?id=$idprod'>EDITAR NOTÍCIA</td>";
                    echo "<td><a href = 'excluir_noticia.php?id=$idprod'>EXCLUIR NOTÍCIA</td>";
                
                    
                echo "</tr>";
            }


            echo "</table>";
        
    ?>    
    
    
    
    </form>



</body>
</html>