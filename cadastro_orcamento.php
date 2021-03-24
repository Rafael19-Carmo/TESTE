<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="salvar_orcamento.php" method="POST" enctype="multipart/form-data">  
    Nome <input type = "text" required name = "usuario" ><br><br>
    Telefone: <input type = "text" required name =  "telefone1">
    Whatsapp: <input type = "text" required name = "whatsapp">
    Email : <input type = "text" required name = "email"><br>
    Descrição:<br>
    <textarea name="descricao" id="" cols="50" rows="10"></textarea><br><br>
    Arquivo: <input type = "file"  name = "arquivo"><br><br>
    <input type="submit" value = "Enviar"> 
    
    </form>
</body>
</html>