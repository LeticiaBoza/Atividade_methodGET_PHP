<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>

    <h1>Agora você vai conseguir saber mais.</h1>
    <p>Escolher quanto de desconto você consegue? Que tal 100%?</p>

    <?php
        $desconto = $_GET["desconto"];
        $valor = $_GET["valor"];
        $aux = $valor * $desconto/100;
        $result = $valor - $aux;
    ?>

<p><?php echo "O valor do seu produto já com desconto de $desconto% é de: $result" ?></p>
     
</body>
</html>