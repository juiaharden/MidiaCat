<?php

    include_once('./conexao.php');

    if( isset($_FILES["imagem"]) && !empty($_FILES["imagem"]))
    {
        $imagem = "./img/".$_FILES["imagem"]["name"];
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
        echo "Imagem enviada com sucesso!";
    }else{
        $imagem = "";
    }

    $query = "INSERT INTO usuarios (imagem) values ('$imagem')";
    $result = mysqli_query($conexao, $query);
    
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>MídiaCat • Upload</title>
</head>

<body>

    <header>

        <nav>
            <a class="logo" href="index.php">
                <p class="typing typing-animation">MídiaCat</p>
            </a>

            <ul class="nav-list">
                <li><a href="index.php"><i class="fa-solid fa-house" style="color: #ffffff;"></i></a></li>
                <!-- <li><a href="html/upload.html"><i class="fa-solid fa-upload" style="color: #ffffff;"></i></a></li> -->
                <li><a href="perfil.php"><i class="fa-solid fa-paw" style="color: #ffffff;"></i></a></li>
            </ul>
        </nav>

    </header>

    <!-- <div class="container">
        <div class="wrapper">
           <div class="image">
              <img src="">
           </div>
           <div class="content">
              <div class="icon">
                 <i class="fas fa-cloud-upload-alt"></i>
              </div>
              <div class="text">
                 Nenhuma imagem selecionada
              </div>
           </div>
           <div id="cancel-btn">
              <i class="fas fa-times"></i>
           </div>
           <div class="file-name">
              File name here
           </div>
        </div>
        <button onclick="defaultBtnActive()" id="custom-btn">Selecione uma imagem de seu gato</button>
        <input id="default-btn" type="file" hidden>

        <button id="custom-btn">Postar</button>
     </div> -->

     <div class="row">
        <div class="col-md-4">
            <form action="./upload.php" method="post" enctype="multipart/form-data">
                <label>Selecione a imagem</label>
                <input type="file" name="imagem" accept="image/*" class="form-data">
                <button type="submit" class="btn btn-sucess">Enviar imagem</button>
            </form>
        </div>
     </div>


    <script src="../js/upload.js"></script>
</body>

</html>