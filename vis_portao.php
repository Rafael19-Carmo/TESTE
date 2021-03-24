<?php
    $sql = "select * from produto where tipo = 'portao_comum'";
    include "conexao.php";
    $resultado = mysqli_query($conexao,$sql);
    echo"TIPO : Portão Comum<br><br><br>";
    while($linha = mysqli_fetch_array($resultado)){
        $id = $linha['id'];    
        $imagem = $linha['imagem'];
        echo "<div>";
        echo "<img src='img/$imagem' width = '55px' height = '50px'>";
        echo "<p>".$linha['tipo']."</p><br>";
        echo "<p>".$linha['descricao']."</p><br>";

        
        echo "</div>";
        echo"<br><br>";
    }
?>