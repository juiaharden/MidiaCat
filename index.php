<?php

include "conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>MídiaCat • Início</title>
</head>

<body>

    <header>

        <nav>
            <a class="logo" href="index.php">
                <p class="typing typing-animation">MídiaCat</p>
            </a>

            <ul class="nav-list">
                <li><a href="index.php"><i class="fa-solid fa-house" style="color: #ffffff;"></i></a></li>
                <li><a href="upload.php"><i class="fa-solid fa-upload" style="color: #ffffff;"></i></a></li>
                <li><a href="perfil.php"><i class="fa-solid fa-paw" style="color: #ffffff;"></i></a></li>
                <li><a href="creditos.html">créditos</a></li>
            </ul>
        </nav>

    </header>

    <div class="container">
        <main>
            <div class="text-publi">
                <a href="upload.php">
                    <h2>Publique uma foto/vídeo do seu catmiau!</h2>
                </a>
            </div>
        </main>
    </div>

    <div style="border-radius: 50px; margin:  5rem 40rem; padding: 80px 0 ; background-color: #7F22F6;">
        <?php

        $query = "Select imagem from usuarios";
        $dados = mysqli_query($conexao, $query);
        if ($dados) {
            while ($linha = mysqli_fetch_assoc($dados)) {
        ?>
                <img src="<?php echo $linha["imagem"]; ?>" style="width: 100%; height: 100%; object-fit: contain;">

        <?php
            }
        }
        ?>
    </div>

    <footer style="width: 100%; padding: 30px; background-color: #7F22F6;">
        <small style="color: #ffffff; font-size: 22px; font-weight: 300; display: flex; justify-content: center; align-items: center;"> 
        &copy; Julia Harden Arendacz
    </small>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>