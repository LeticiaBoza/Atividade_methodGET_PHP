<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    
    <h1>Você nunca soube isso.</h1>
    <p>Qualidade de vida é saber o perímetro do seu cômodo.</p>

    <?php
        $larg = $_GET["larg"];
        $comp = $_GET["comp"];
        $result = $larg + $larg + $comp + $comp;
    ?>

    <p><?php echo "O tamanho do perímetro do seu cômodo é: $result"; ?></p>

</body>
</html>