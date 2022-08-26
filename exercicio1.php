<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    
</head>
<body>

<h1>O resultado útil.</h1>
<p>A resposta que você precisava para sua vida melhorar.</p>

    <?php
        $larg = $_GET["larg"];
        $comp = $_GET["comp"];
        $result = $larg * $comp;
    ?>

    <p><?php echo "O tamanho da sua área com o comprimento $comp e a largura $larg é: $result"; ?></p>

</body>
</html>