<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $name = isset($_GET["name"]) ? $_GET["name"] : "[não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"] : "[não informado]";
        $idade = isset($_GET["idade"])?$_GET["idade"] :0;
        echo "<h1>Olá, $name</h1>
            <h3>Com base em nosso algoritmo e em suas respostas, concluimos que a sessão de roupas que mais pode se adequar ao seu estilo é:</h3>
        ";
        if ($sexo == 'mulher') {
            echo "<p>Roupas da sessão feminina moda";
            if ($idade >= 18) {
                echo " jovem adulta</p>";
            } else {
                echo " infantil</p>";
            }
        } else {
            echo "<p>Roupas da sessão masculina moda";
            if ($idade >= 18) {
                echo " jovem adulto</p>";
            } else {
                echo " infantil</p>";
            }
        }
    ?>
</body>
</html>