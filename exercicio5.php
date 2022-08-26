<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    
    <h1>Agora você vai fazer ao contrário.</h1>
    <p>Vou fazer igual o Akinator. Descobrir a porcentagem do seu desconto!</p>

    <?php
    
        $preco = $_GET["preco"];
        $precof = $_GET["precof"];
        $result = 100*($preco - $precof)/$preco;

    ?>

    <p><?php echo "A porcentagem do seu desconto com base no valor inicial de $preco e com o final de $precof é de: $result%." ?></p>

</body>
</html>