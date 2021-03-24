<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTÍCIAS GOMAX</title>
</head>
<body>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "select * from noticia";
            include "conexao.php";
            $resultado = mysqli_query($conexao,$sql);

            while($linha = mysqli_fetch_array($resultado)){
                $titulo = $linha['titulo'];
                $link = $linha['link'];   
            }
        }
        else{
            $id = 0;
            $titulo = "";
            $link = "";
        }
    ?>
    <a href="links_noticia.html">voltar</a><br><br><br><br>
    <form action = "salvar_noticia.php" method = "POST">
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        Título<input type="text" required name="titulo" value = "<?php echo $titulo; ?> ">
        Link da notícia <input type = "text" required name = "linc" value = "<?php echo $link ?>">
        <input type = "submit" value="salvar">
     </from>
</body>
</html>