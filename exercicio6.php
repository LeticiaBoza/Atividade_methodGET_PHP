<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Exercício 6.</title>
</head>
<body>
    
    <h1>Parabéns pra você. Ou não.</h1> 
    <p>Obrigada por acompanhar meu progresso nesse site.</p>

    <?php
        $anoinicial = $_GET["anoinicial"];
        $anoatual = $_GET["anoatual"];
        $result = $anoatual - $anoinicial;
    ?>

    <p><?php echo "Sua idade é: $result! Parabéns!!! Muitos anos de vida."?></p>




</body>
</html>