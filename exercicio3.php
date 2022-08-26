<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Surpresa! Você ganhou um desconto.</h1>
    <p>Ganhar 5% de desconto é muito útil, qualquer 1 centavo conta.</p>

    <?php
        $valor = $_GET["valor"];
        $desconto = $valor * 0.05;
    ?>

    <p><?php echo "O valor do seu desconto de 5% no seu produto de R$$valor fica: R$$desconto."?></p>
</body>
</html>